<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Articulo;

class ArticulosController extends Controller
{
    public function __constructor()
    {
       $this->middleware('auth', ['except'  => ['serviceListArticles']]) ;
    }
    public function index(){
        $articulos = Articulo::orderByRaw('rand()')->limit(5)->with(['categorias', 'users'])->get();
       return json_encode($articulos);
    }
    public function serviceListArticles(Request $request)
    {
        if($request->user() != null)
        {
            $apiKey = 'AIzaSyB4CbJQ4DyUU8PBQA9wtm9IqClbF7dhOuo';
            $customerAddrs = Auth::user()->calle.' '.Auth::user()->n_exterior.', '.Auth::user()->colonia.', '.Auth::user()->municipio.', '.Auth::user()->estado;
            $formattedCustomer = str_replace(' ', '+', $customerAddrs);//remmplazamos los espacios por + en la direccion del cliente
            //hacemos la peticion al servicio
            $servicioCli = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedCustomer.'&sensor=false&key='.$apiKey);
            $respUser       = json_decode($servicioCli);
            $latitdCli      = $respUser->results[0]->geometry->location->lat;
            $longitudCli    = $respUser->results[0]->geometry->location->lng;
            $coordenadasCli = $latitdCli.','.$longitudCli;
            //consultamos los artculos
            $articulos = Articulo::with(['categorias', 'users'])->get();
            //recorremos cada articulo
            for($i=0; $i<count($articulos); $i++){
                $rental_addrs = $articulos[$i]->users->calle.' '.$articulos[$i]->users->n_exterior.', '.$articulos[$i]->users->colonia.', '.$articulos[$i]->users->municipio.', '.$articulos[$i]->users->estado;
                $formattedRental = str_replace(' ', '+', $customerAddrs);//remmplazamos los espacios por + en la direccion del rentador
                //hacemos la peticion al servicio
                $servicioRent = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedRental.'&sensor=false&key='.$apiKey);
                $respRent = json_decode($servicioRent);
                $latitudRent        = $respRent->results[0]->geometry->location->lat;
                $longitudRent       = $respRent->results[0]->geometry->location->lng;
                $coordenadasRent    = $latitudRent.','.$longitudRent;
                //calculamos la distancia
                $calcular=file_get_contents("https://maps.googleapis.com/maps/api/directions/json?key=$apiKey&origin=$coordenadasCli&destination=$coordenadasRent&mode=driving");
                $datos_api=json_decode($calcular);
                $distancia = $datos_api->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                $duracion = $datos_api->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
                $articulos[$i]->distancia = $distancia;
                $articulos[$i]->duracion = $duracion;
            }
            return json_encode($articulos);
        }
    }
}
