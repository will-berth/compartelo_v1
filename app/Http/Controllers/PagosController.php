<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Articulo;
use Stripe;

class PagosController extends Controller
{
    //

    // public function set()
    // {
    //     $servicio = Servicio::where('id', $data['servicio_id'])->first();
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     $charge = \Stripe\Charge::create([
    //         "amount" => $servicio['precio_servicio'] * 100,
    //         "currency" => "mxn",
    //         "description" => "email: ".Auth::user()->email.", id_servicio: ".$servicio['tipo_servicio'],
    //         "source" => $request->stripeToken,  
    //     ]);
    //     if($charge->status = 'succeeded'){
    //         $data['cliente_id'] = Auth::user()->id;
    //         $data['estado'] = 'P';
    //         Cita::create($data);
    //         return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Cita agendada correctanente']);
    //     }
    // }

    public function checkout(Request $request, Response $response)
    {
        $data = $request->all();
        $articulo = Articulo::where('id', $data['id_articulo'])->first();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_APIKEY'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
            'price_data' => [
                'currency' => 'mxn',
                'product_data' => [
                    'name' => $articulo->articulo,
                    "description" => $articulo->desc,
                    "images" => [
                        "http://69fa-2806-10a6-e-752e-8099-9b14-4a7e-715.ngrok.io/assets/img/articulos/".$articulo->img1,
                    ],
                ],
                'unit_amount' => $articulo->precio * 100,
            ],
            'quantity' => 1,
            ]],
            "payment_method_types" => [
                "card"
            ],
            'mode' => 'payment',
            'success_url' => 'http://127.0.0.1:8000/success',
            'cancel_url' => 'http://127.0.0.1:8000/cancel',
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
}
