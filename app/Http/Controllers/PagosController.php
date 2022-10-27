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

class PagosController extends Controller
{
    //
    public function checkout(Request $request, Response $response)
    {
        $data = $request->all();
        // $articulo = Articulo::where('id', $data['id_articulo'])->first();
        $cartItem = Carrito::with('articulos.users')->where('id', $data['id_c'])->first();
        $cartItem->articulos->periodos;
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
                    'periodo' => $cartItem->articulos->periodos->tipo,
                    'user_id' => $cartItem->user_id
                ]
            ],
            "customer_email" => $cartItem->articulos->users->email,
            'success_url' => 'https://compartelo.softcode.com.mx/success',
            'cancel_url' => 'https://compartelo.softcode.com.mx/cancel',
        ]);
        
        return response('', 303)->withHeaders(['Location' => $session->url]);
    }

    public function success(Request $request)
    {
        return response('', 303)->withHeaders(['Location' => '/success']);
    }
    
    public function success_view()
    {
        return view('success-checkout');

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
                    'Hora' => Carbon::now()->addHours($metadataPay['cantidad_periodo']),
                    'Dia' => Carbon::now()->addDays($metadataPay['cantidad_periodo']),
                    'Semana' => Carbon::now()->addWeeks($metadataPay['cantidad_periodo']),
                    'Mes' => Carbon::now()->addMonths($metadataPay['cantidad_periodo']),
                    'Año' => Carbon::now()->addYears($metadataPay['cantidad_periodo']),
                ];
                $renta = Renta::create([
                    'user_id' => $metadataPay['user_id'],
                    'fecha_renta' => Carbon::now(),
                    'total' => $metadataPay['total_renta'],
                    'tipo_pago' => 'tarjeta',
                    'estado' => '1',
                ]);
                Detalle::create([
                    'renta_id' => $renta->id,
                    'articulo_id' => $metadataPay['id_articulo'],
                    'cantidad' => 1,
                    'importe' => 12,
                    'fecha_renta' => Carbon::now(),
                    'fecha_devolucion' => $fechaDevolucion[$metadataPay['periodo']],
                    'estado' => 1
                ]);
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
