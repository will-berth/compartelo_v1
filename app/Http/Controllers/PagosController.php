<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Articulo;
use App\Models\Carrito;
use App\Models\User;
use App\Models\Renta;
use App\Models\Detalle;
use Stripe;
use Illuminate\Support\Facades\Cache;

class PagosController extends Controller
{
    //
    public function checkout(Request $request, Response $response)
    {
        $data = $request->all();
        Cache::flush();
        // $articulo = Articulo::where('id', $data['id_articulo'])->first();
        $cartItem = Carrito::with('articulos.users')->where('id', $data['id_c'])->first();
        $cartItem->articulos->periodos;
        $importe = $cartItem->articulos->precio * $data['cant-renta'];
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_APIKEY'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
            'price_data' => [
                'currency' => 'mxn',
                'product_data' => [
                    'name' => $cartItem->articulos->articulo,
                    "description" => $cartItem->articulos->desc,
                    "images" => [
                        "https://compartelo.softcode.com.mx/assets/img/articulos/".$cartItem->articulos->img1,
                    ],
                ],
                'unit_amount' => $data['t_r'] * 100,
            ],
            'quantity' => 1,
            ]],
            "payment_method_types" => [
                "card"
            ],
            'mode' => 'payment',
            'payment_intent_data' => [
                'metadata' => [
                    'id_carrito' => $data['id_c'],
                    'total_renta' => $data['t_r'],
                    'cantidad_periodo' => $data['cant-renta'],
                    'id_articulo' => $cartItem->articulos->id,
                    'periodo' => $cartItem->articulos->periodos->id,
                    'user_id' => $cartItem->user_id,
                    'importe' => $importe
                ]
            ],
            "customer_email" => $cartItem->articulos->users->email,
            'success_url' => 'http://5f4e-2806-10a6-e-85c0-d95e-aea5-1306-dcb7.ngrok.io/success',
            'cancel_url' => 'http://5f4e-2806-10a6-e-85c0-d95e-aea5-1306-dcb7.ngrok.io/cancel',
        ]);
        Cache::add('sessionUrl', $session->url);
        Cache::add('coordenadas', $cartItem->articulos->users->coordenadas);
        
        return response('', 303)->withHeaders(['Location' => $session->url]);
    }

    public function success(Request $request)
    {
        return response('', 303)->withHeaders(['Location' => '/success']);
    }
    
    public function success_view()
    {
        $coordenadas = Cache::get('coordenadas');
        return view('success-checkout', ['coordenadas' => $coordenadas]);

    }
    public function cancel_view()
    {
        $sessionStripeUrl = Cache::get('sessionUrl');
        return view('cancel-checkout', ['url' => $sessionStripeUrl]);
    }

    public function cancel()
    {
        return 'Pago cancelado';
    }

    public function webhook(Request $request)
    {
        switch ($request->type) {
            case 'charge.succeeded':
                $metadataPay = $request->data['object']['metadata'];
                $fechaDevolucion = [
                    '1' => Carbon::now()->addHours($metadataPay['cantidad_periodo']),
                    '2' => Carbon::now()->addDays($metadataPay['cantidad_periodo']),
                    '3' => Carbon::now()->addWeeks($metadataPay['cantidad_periodo']),
                    '4' => Carbon::now()->addMonths($metadataPay['cantidad_periodo']),
                    '5' => Carbon::now()->addYears($metadataPay['cantidad_periodo']),
                ];
                $renta = Renta::create([
                    'user_id' => $metadataPay['user_id'],
                    'fecha_renta' => Carbon::now(),
                    'total' => $metadataPay['total_renta'],
                    'tipo_pago' => 'tarjeta',
                    'estado' => '0',
                ]);
                Detalle::create([
                    'renta_id' => $renta->id,
                    'articulo_id' => $metadataPay['id_articulo'],
                    'cantidad' => 1,
                    'importe' => $metadataPay['importe'],
                    'fecha_renta' => Carbon::now(),
                    'fecha_devolucion' => $fechaDevolucion[$metadataPay['periodo']],
                    'estado' => 0
                ]);
                $articulo = Articulo::find($metadataPay['id_articulo']);
                $articulo->esta_rentada = 1;
                $articulo->save();
                $itemCart = Carrito::find($metadataPay['id_carrito']);
                $itemCart->delete();
            default:
                echo 'Received unknown event type ' . $request->type;
        }
    }

    public function getDataConfirm(Request $request)
    {
        $data = $request->all();
        $idCart = $data['id'];
        $itemCart = Carrito::with('articulos.periodos')->where('id', $idCart)->first();
        return json_encode(['datos' => $itemCart]);
    }
}
