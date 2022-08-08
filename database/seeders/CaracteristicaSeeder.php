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
                'desc'           =>'mango de madera, cabeza de acero, marca truper'
            ],
            [
                'articulo_id'   =>2,
                'desc'           =>'precio economico, enseña a seducir, ayuda a tu autoestima, con 110 paginas'
            ],
            [
                'articulo_id'   =>3,
                'desc'           =>'marca collins, mango de madera,plancha acerada y ovalada'
            ],
            [
                'articulo_id'   =>4,
                'desc'           =>'marca pretul, precio economico, capacidad 30 galones, color amarilla'
            ],
            [
                'articulo_id'   =>5,
                'desc'           =>'nissan, llantas seminuevas, calibrado, color roja y blanca, cuenta con papeles'
            ],
            [
                'articulo_id'   =>6,
                'desc'           =>'marca nike, forro de piel, no desgastado, de buen tamaño, diferente colores'
            ],
            [
                'articulo_id'   =>7,
                'desc'           =>'para fiestas, redondo y grande, capacidad de 15 personas, incluye sillas'
            ],
            [
                'articulo_id'   =>8,
                'desc'           =>'tamaño ideal, marca hamilton, tapa bisagrada, material polipropileno'
            ],
            [
                'articulo_id'   =>9,
                'desc'           =>'sumergible, impulso fuerte, volumetrica, peso 8 kg' 
            ],
            [
                'articulo_id'   =>10,
                'desc'           =>'tamaño grande, color crema, enfria muy bien,  peso 25 kg, resistente'
            ],
            [
                'articulo_id'   =>11,
                'desc'           =>'llave ajustable, tamaño mediano, inoxidable, torque 262 lb, modelo 7911'
            ],
            [
                'articulo_id'   =>12,
                'desc'           =>'inalambrico, tres en uno, RPM 2baterias, juego completo, marca bosch'
            ],
            [
                'articulo_id'   =>13,
                'desc'           =>'caja tradicional, acerado, caja de 7 metros, motor nuevo, color azul'
            ],
            [
                'articulo_id'   =>14,
                'desc'           =>'mide 15 metros, resistente al calor, anchura regular, color verde'
            ],
            [
                'articulo_id'   =>15,
                'desc'           =>'250 de kilometraje, moto de trabajo, motor 150, color blanca, seminuevo'
            ],
            [
                'articulo_id'   =>16,
                'desc'           =>'material aluminio, 20 lit capacidad, tapa vidrio, color plata'
            ],
            [
                'articulo_id'   =>17,
                'desc'           =>'marca yamaha, 6 cuerdas acerada, tamaño estandar, color marron'
            ],
            [
                'articulo_id'   =>18,
                'desc'           =>'linea boce, recargable , color negra, incluye cables, microfono'
            ],
            [
                'articulo_id'   =>19,
                'desc'           =>'linea whal, color negra y rojo, peines guia 24 piezas, voltaje 127 v, peso .85 kg'
            ],
            [
                'articulo_id'   =>20,
                'desc'           =>'epson, color blanca, 1080 Full HD, 1024x768 HDMI, 350 pulgada, modelo E20'
            ],
        ];
        DB::table('caracteristicas')->insert($data);
    }
}
