<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'articulo_id'   =>1,
                'desc'           =>'mango de madera'
            ],
            [
                'articulo_id'   =>1,
                'desc'           =>'cabeza de acero'
            ],
            [
                'articulo_id'   =>1,
                'desc'           =>'marca truper'
            ],
            [
                'articulo_id'   =>1,
                'desc'           =>'uña curva 16 oz'
            ],
            [
                'articulo_id'   =>2,
                'desc'           =>'precio economico'
            ],
            [
                'articulo_id'   =>2,
                'desc'           =>'enseña a seducir'
            ],
            [
                'articulo_id'   =>2,
                'desc'           =>'ayuda a tu autoestima'
            ],
            [
                'articulo_id'   =>2,
                'desc'           =>'con 110 paginas'
            ],
            [
                'articulo_id'   =>3,
                'desc'           =>'marca collins'
            ],
            [
                'articulo_id'   =>3,
                'desc'           =>'mango de madera'
            ],
            [
                'articulo_id'   =>3,
                'desc'           =>'plancha acerada y ovalada'
            ],
            [
                'articulo_id'   =>4,
                'desc'           =>'marca pretul'
            ],
            [
                'articulo_id'   =>4,
                'desc'           =>'llantas estables'
            ],
            [
                'articulo_id'   =>4,
                'desc'           =>'color amarilla'
            ],
            [
                'articulo_id'   =>4,
                'desc'           =>'tamaño estandar'
            ],
            [
                'articulo_id'   =>5,
                'desc'           =>'nissan'
            ],
            [
                'articulo_id'   =>5,
                'desc'           =>'llantas seminuevas'
            ],
            [
                'articulo_id'   =>5,
                'desc'           =>'calibrado'
            ],
            [
                'articulo_id'   =>5,
                'desc'           =>'color roja y blanca'
            ],
            [
                'articulo_id'   =>6,
                'desc'           =>'marca nike'
            ],
            [
                'articulo_id'   =>6,
                'desc'           =>'forro de piel'
            ],
            [
                'articulo_id'   =>6,
                'desc'           =>'no desgastado'
            ],
            [
                'articulo_id'   =>6,
                'desc'           =>'diferente colores'
            ],
            [
                'articulo_id'   =>7,
                'desc'           =>'para fiestas'
            ],
            [
                'articulo_id'   =>7,
                'desc'           =>'redondo y grande'
            ],
            [
                'articulo_id'   =>7,
                'desc'           =>' capacidad de 15 persons'
            ],
            [
                'articulo_id'   =>7,
                'desc'           =>'incluye sillas'
            ],
            [
                'articulo_id'   =>8,
                'desc'           =>'tamaño estandar'
            ],
            [
                'articulo_id'   =>8,
                'desc'           =>'marca hamilton'
            ],
            [
                'articulo_id'   =>8,
                'desc'           =>'tapa bisagrada'
            ],
            [
                'articulo_id'   =>8,
                'desc'           =>'material polipropileno'
            ],
            [
                'articulo_id'   =>9,
                'desc'           =>'sumergible' 
            ],
            [
                'articulo_id'   =>9,
                'desc'           =>'impulso fuerte' 
            ],
            [
                'articulo_id'   =>9,
                'desc'           =>'volumetrica' 
            ],
            [
                'articulo_id'   =>9,
                'desc'           =>' peso 8 kg' 
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'tamaño grande'
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'color crema'
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'enfria muy bien'
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'peso 25 kg, resistente'
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'resistente'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'llave ajustable'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'tamaño mediano'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'inoxidable'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'torque 262 lb'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'modelo 7911'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'inalambrico'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'tres en uno'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'RPM 2baterias'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'juego completo'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'marca bosch'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'caja tradicional'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'acerado'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'caja de 7 metros'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'motor nuevo'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'color azul'
            ],
            [
                'articulo_id'   =>14,
                'desc'           =>'mide 15 metros, resistente al calor, anchura regular, color verde'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'250 de kilometraje'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'moto de trabajo'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'motor 150'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'color blanca'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'seminuevo'
            ],
            [
                'articulo_id'   =>16,
                'desc'           =>'material aluminio'
            ],
            [
                'articulo_id'   =>16,
                'desc'           =>'20 lit capacidad'
            ],
            [
                'articulo_id'   =>16,
                'desc'           =>'tapa vidrio'
            ],
            [
                'articulo_id'   =>16,
                'desc'           =>'color plata'
            ],
            [
                'articulo_id'   =>17,
                'desc'           =>'marca yamaha'
            ],
            [
                'articulo_id'   =>17,
                'desc'           =>'6 cuerdas acerada'
            ],
            [
                'articulo_id'   =>17,
                'desc'           =>'tamaño estandar'
            ],
            [
                'articulo_id'   =>17,
                'desc'           =>'color marron'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'linea boce'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'recargable'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'color negra'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'incluye cables'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'microfono'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'linea whal'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'color negra y rojo'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'peines guia 24 piezas'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'voltaje 127 v'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'peso .85 kg'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'epson'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'color blanca'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'1080 Full HD'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'1024x768 HDMI'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'350 pulgada'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'
                modelo E20'
            ],
        ];
        DB::table('caracteristicas')->insert($data);
    }
}
