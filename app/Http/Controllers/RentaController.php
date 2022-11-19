<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;
use App\Models\Renta;

class RentaController extends Controller
{
    //
    public function getLatLngArticulo($id_renta)
    {
        $data = Detalle::with('articulo.users')->where('renta_id', $id_renta)->first();
        return json_encode(['coordenadas' => $data->articulo->users->coordenadas]);
    }
}
