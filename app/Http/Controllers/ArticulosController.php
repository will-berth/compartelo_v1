<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use App\Models\Caracteristica;
use App\Models\DetalleCategoria;
use App\Models\Marca;
use App\Models\OpinionArtc;
use App\Models\User;

class ArticulosController extends Controller
{
    public function __constructor()
    {
       $this->middleware('auth', ['except'  => ['serviceListArticles']]) ;
    }
    public function viewSearchArticle()
    {
        return view('searchArticle');
    }
    public function index()
    {
        $apiKey = 'AIzaSyB4CbJQ4DyUU8PBQA9wtm9IqClbF7dhOuo';
        $articulos = Articulo::orderByRaw('rand()')->limit(5)->with(['categorias', 'users', 'periodos'])->get();
        if(Auth::guard('web2')->user() != null){
            for($i = 0; $i < sizeof($articulos); $i++)
            {
                $origen = Auth::guard('web2')->user()->coordenadas;
                $destino = $articulos[$i]->users->coordenadas;
                //dd($destino);
                //calculamos la distancia
                $calcular=file_get_contents("https://maps.googleapis.com/maps/api/directions/json?key=$apiKey&origin=$origen&destination=$destino&mode=driving");
                $datos_api=json_decode($calcular);
                $distancia = $datos_api->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                $duracion = $datos_api->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
                $articulos[$i]->distancia = $distancia;
                $articulos[$i]->duracion = $duracion;
            }
        }
       return json_encode($articulos);
    }
    public function searchArticle($articulo, $marca)
    {
        if($marca == 0){
            $searchArticle = Articulo::with(['categorias', 'users', 'periodos', 'marcas'])
                                    ->where('articulo', 'like', '%'.$articulo.'%')
                                    ->get();
        }else{
            $searchArticle = Articulo::with(['categorias', 'users', 'periodos', 'marcas'])
                                    ->join('detalles_categorias', 'articulo_id', '=', 'articulos.id')
                                    ->join('categorias', 'categoria_id', '=', 'categorias.id')
                                    ->join('marcas', 'articulos.marca_id', 'marcas.id')
                                    ->where([['categorias.categoria', $articulo], ['marcas.marca', $marca]])
                                    ->get();
        }
        $marcas = Marca::select('marcas.*')->join('articulos', 'marca_id', '=', 'marcas.id')
                        ->where('articulo', 'like', '%'.$articulo.'%')
                        ->groupBy('marcas.id')
                        ->get();
        return json_encode(['articulos' => $searchArticle, 'marcas' => $marcas]);
    }
    public function itemDetails($clave)
    {
        $articulo = Articulo::with(['categorias', 'users', 'periodos', 'marcas', 'caracteristicas', 'opionesArtc'])->where('articulos.clave', $clave)->get();
        $opiniones = User::with('opiniones')->join('opiniones', 'user_id', '=', 'users.id')
                                            ->where([['opiniones.user_id', $articulo[0]->users->id], ['opiniones.tipo', 0]])
                                            ->get();
        return json_encode(['articulo' => $articulo, 'opiniones' => $opiniones]);
    }
    public function itemByCategory($categoria)
    {
        $itemByCategory = Articulo::with(['categorias', 'users', 'periodos', 'marcas'])
                                    ->join('detalles_categorias', 'articulo_id', '=', 'articulos.id')
                                    ->join('categorias', 'categoria_id', '=', 'categorias.id')
                                    ->where('categorias.categoria', $categoria)
                                    ->get();
        $marcas = Marca::select('marcas.*')->join('articulos', 'marca_id', '=', 'marcas.id')
                        ->join('detalles_categorias', 'articulo_id', '=', 'articulos.id')
                        ->join('categorias', 'categoria_id', '=', 'categorias.id')
                        ->where('categorias.categoria', $categoria)
                        ->groupBy('marcas.id')
                        ->get();
        return json_encode(['articulos' => $itemByCategory, 'marcas' => $marcas]);
    }
    public function itemByCategoryAndBrand($categoria, $marca)
    {
        $itemByCategory = Articulo::with(['categorias', 'users', 'periodos', 'marcas'])
                                    ->join('detalles_categorias', 'articulo_id', '=', 'articulos.id')
                                    ->join('categorias', 'categoria_id', '=', 'categorias.id')
                                    ->join('marcas', 'articulos.marca_id', 'marcas.id')
                                    ->where([['categorias.categoria', $categoria], ['marcas.marca', $marca]])
                                    ->get();
        $marcas = Marca::select('marcas.*')->join('articulos', 'marca_id', '=', 'marcas.id')
                        ->join('detalles_categorias', 'articulo_id', '=', 'articulos.id')
                        ->join('categorias', 'categoria_id', '=', 'categorias.id')
                        ->where('categorias.categoria', $categoria)
                        ->groupBy('marcas.id')
                        ->get();
        return json_encode(['articulos' => $itemByCategory, 'marcas' => $marcas]);
    }
    public function getOpiniones($clave, $tipo, $status)
    {
        $articulo = Articulo::where('clave', $clave)->get();
        switch($status){
            case 5:
                $opiniones = OpinionArtc::where([['articulo_id', $articulo[0]['id']], ['tipo', $tipo]])->orderBy('id')->limit($status)->get();
                break;
            case 0:
                $opiniones = OpinionArtc::where([['articulo_id', $articulo[0]['id']], ['tipo', $tipo]])->orderBy('id')->get();
                break;
            default:
                $opiniones = OpinionArtc::where('articulo_id', $articulo[0]['id'])->orderBy('id')->get();
                break;
        }
        return json_encode($opiniones);
        
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

    public function saveFile($request, $field, $tipo){
        $imagen = $request->file($field);
        $nombreimagen = $request->clave."-".$tipo.".".$imagen->guessExtension();
        $ruta = public_path("assets/img/articulos/");

        //$imagen->move($ruta,$nombreimagen);
        $status = copy($imagen->getRealPath(),$ruta.$nombreimagen);
        return $nombreimagen;
    }

    public function prepareUpset($articuloId, $separator, $dataStr, $field1, $field2)
    {
        $arrayData = explode($separator, $dataStr);
        $upset = [];
        for($i = 0; $i < count($arrayData); $i++){
            $upset[] = [$field1 => $arrayData[$i], $field2 => $articuloId];
        }
        return $upset;
    }

    public function publicar(){
        return view('publicar');
    }

    public function publicarOtherViews($step)
    {
        $root = 'publicar.';
        $returnView = $root.$step;
        return view($returnView);
    }

    public function store(Request $request)
    {
        try{
            $claveReturn = $request['clave'];
            $data = $request->all();
            DB::transaction(function() use ($request, $data){
                $img1 = $this->saveFile($request, "img1", "img1");
                $img2 = $this->saveFile($request, "img2", "img2");
                $img3 = $this->saveFile($request, "img3", "img3");
                $img4 = $this->saveFile($request, "img4", "img4");
                $data['img1'] = $img1;
                $data['img2'] = $img2;
                $data['img3'] = $img3;
                $data['img4'] = $img4;
                // $userId = Auth::id();
                // $data['user_id'] = $userId;
    
                $res = Articulo::create($data);
                $articuloId = $res['id'];
               
                $queryCaracteristicas = $this->prepareUpset($articuloId, '&/', $data['caracteristicas'], 'desc', 'articulo_id');
                Caracteristica::upsert($queryCaracteristicas, ['articulo_id'], ['desc']);
        
                $queryCategorias = $this->prepareUpset($articuloId, ',', $data['categorias'], 'categoria_id', 'articulo_id');
                DetalleCategoria::upsert($queryCategorias, ['categoria_id'], ['articulo_id']);
            });
            return json_encode(['type' => 'success', 
            'title' => 'Exito', 
            'text' => 'Tu artículo ha sido publicado exitsamente.',
            'clave' => $claveReturn]);
        }catch(Exception $e){
            return json_encode(['type' => 'error', 'title' => 'Error', 'text' => 'Hubieron problemas al registrar tu artículo. Intenta nuevamente.']);
        }
    }
}
