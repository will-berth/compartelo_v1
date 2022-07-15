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
                'desc'          => 'Martillo de madera ejejje',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Hacking etico',
                'precio'        => 100,
                'img1'          => 'librohack1.jpg',
                'img2'          => 'librohack2.jpg',
                'img3'          => 'librohack3.jpg',
                'img4'          => 'librohack4.jpg',
                'estado'        => 'Nuevo',
                'desc'          => 'Libro sobre hackien etico',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Martillo',
                'precio'        => 100,
                'img1'          => 'martillo1.jpg',
                'img2'          => 'martillo2.jpg',
                'img3'          => 'martillo3.jpg',
                'img4'          => 'martillo4.jpg',
                'estado'        => 'Semi nuevo',
                'desc'          => 'Martillo de madera ejejje',
            ],
            [
                'user_id'       => 1,
                'articulo'      => 'Hacking etico',
                'precio'        => 100,
                'img1'          => 'librohack1.jpg',
                'img2'          => 'librohack2.jpg',
                'img3'          => 'librohack3.jpg',
                'img4'          => 'librohack4.jpg',
                'estado'        => 'Nuevo',
                'desc'          => 'Libro sobre hackien etico',
            ],
        ];
        DB::table('articulos')->insert($data);
    }
}
