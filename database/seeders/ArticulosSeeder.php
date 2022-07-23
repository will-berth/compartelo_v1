<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
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
                'user_id'       => 1,
                'articulo'      => 'Martillo',
                'precio'        => 100,
                'img1'          => 'martillo1.jpg',
                'img2'          => 'martillo2.jpg',
                'img3'          => 'martillo3.jpg',
                'img4'          => 'martillo4.jpg',
                'estado'        => 'Semi nuevo',
                'desc'          => 'Martillo de madera',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Libro hombre alfa',
                'precio'        => 100,
                'img1'          => 'machoalfa1.jpg',
                'img2'          => 'machoalfa2.jpg',
                'img3'          => 'machoalfa3.jpg',
                'img4'          => 'machoalfa4.jpg',
                'estado'        => ' Nuevo',
                'desc'          => 'Libro sobre tecnicas de seducción',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Pala',
                'precio'        => 150,
                'img1'          => 'pala1.jpg',
                'img2'          => 'pala2.jpg',
                'img3'          => 'pala3.jpg',
                'img4'          => 'pala4.jpg',
                'estado'        => 'Nuevo',
                'desc'          => 'Herramienta de trabajo',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Revolvedora',
                'precio'        => 300,
                'img1'          => 'revolvedora1.jpg',
                'img2'          => 'revolvedora2.jpg',
                'img3'          => 'revolvedora3.jpg',
                'img4'          => 'revolvedora4.jpg',
                'estado'        => 'Usado, regular',
                'desc'          => 'Revolvedora para la construcion',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Carro nissan',
                'precio'        => 350,
                'img1'          => 'nissan1.jpg',
                'img2'          => 'nissan2.jpg',
                'img3'          => 'nissan3.jpg',
                'img4'          => 'nissan4.jpg',
                'estado'        => 'Semi nuevo',
                'desc'          => 'Para trabajo en buen funcionamiento',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Pelotas de futbol',
                'precio'        => 40,
                'img1'          => 'pelota1.jpg',
                'img2'          => 'pelota2.jpg',
                'img3'          => 'pelota3.jpg',
                'img4'          => 'pelota4.jpg',
                'estado'        => 'Semi snuevos',
                'desc'          => 'Pelotas en buen estado',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Mesa para eventos',
                'precio'        => 450,
                'img1'          => 'mesa1.jpg',
                'img2'          => 'mesa2.jpg',
                'img3'          => 'mesa3.jpg',
                'img4'          => 'mesa4.jpg',
                'estado'        => 'Bueno',
                'desc'          => 'Mesas para eventos',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Caja de herramienta',
                'precio'        => 300,
                'img1'          => 'cajaherramienta1.jpg',
                'img2'          => 'cajaherramienta2.jpg',
                'img3'          => 'cajaherramienta3.jpg',
                'img4'          => 'cajaherramienta4.jpg',
                'estado'        => 'Usado como nuevo',
                'desc'          => 'Para guardar herramienta',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Bomba',
                'precio'        => 200,
                'img1'          => 'bomba1.jpg',
                'img2'          => 'bomba2.jpg',
                'img3'          => 'bomba3.jpg',
                'img4'          => 'bomba4.jpg',
                'estado'        => 'Segunda mano',
                'desc'          => 'Excelentes para su trabajo',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Congelador',
                'precio'        => 120,
                'img1'          => 'congelador1.jpg',
                'img2'          => 'congelador2.jpg',
                'img3'          => 'congelador3.jpg',
                'img4'          => 'congelador4.jpg',
                'estado'        => 'Segunda mano',
                'desc'          => 'Conservar tus productos',
            ],
        ];
        DB::table('articulos')->insert($data);
    }
}
