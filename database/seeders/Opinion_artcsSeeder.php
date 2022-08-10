<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Opinion_artcsSeeder extends Seeder
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
                'articulo_id'   => 1,
                'user_id'       => 1,
                'opinion'       =>'recomiendo este producto',
                'f_opinion'     =>'2022-10-10',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 2,
                'user_id'       => 2,
                'opinion'       =>'si va rentar algo que este buen estado',
                'f_opinion'     =>'2022-01-19',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 3,
                'user_id'       => 1,
                'opinion'       =>'execelente servicio',
                'f_opinion'     =>'2022-10-19',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 4,
                'user_id'       => 2,
                'opinion'       =>'muy bueno producto, siga asi, le doy un 10',
                'f_opinion'     =>'2022-09-10',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 5,
                'user_id'       => 1,
                'opinion'       =>'muy amable al negociar, execelente',
                'f_opinion'     =>'2022-10-19',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 6,
                'user_id'       => 2,
                'opinion'       =>'hay ulgunas cosas que no le funciona bien',
                'f_opinion'     =>'2022-01-01',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 7,
                'user_id'       => 1,
                'opinion'       =>'optimo, rentenlo',
                'f_opinion'     =>'2022-02-02',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 8,
                'user_id'       => 2,
                'opinion'       =>'recomendado, excelente para rentar',
                'f_opinion'     =>'2022-03-10',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 9,
                'user_id'       => 2,
                'opinion'       =>'al querer utlizarlo, no funciona una de sus partes',
                'f_opinion'     =>'2022-03-03',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 10,
                'user_id'       => 1,
                'opinion'       =>'recomiendo este producto',
                'f_opinion'     =>'2022-04-18',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 11,
                'user_id'       => 2,
                'opinion'       =>'muy util, y en muy buen estado',
                'f_opinion'     =>'2022-05-17',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 12,
                'user_id'       => 1,
                'opinion'       =>'no renten algo que no sirve',
                'f_opinion'     =>'2022-06-16',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 13,
                'user_id'       => 2,
                'opinion'       =>'no jueguen con la gente, el producto no sirve',
                'f_opinion'     =>'2022-07-15',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 14,
                'user_id'       => 1,
                'opinion'       =>'le falta una pedazo del tal parte',
                'f_opinion'     =>'2022-10-19',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 15,
                'user_id'       => 2,
                'opinion'       =>'el producto esta muy acabado',
                'f_opinion'     =>'2022-17-15',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 16,
                'user_id'       => 1,
                'opinion'       =>'tiene muchos golpes',
                'f_opinion'     =>'2022-11-09',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 17,
                'user_id'       => 2,
                'opinion'       =>'funciona bien',
                'f_opinion'     =>'2022-06-15',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 18,
                'user_id'       => 1,
                'opinion'       =>'algo acabado pero funcional',
                'f_opinion'     =>'2022-11-12',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 19,
                'user_id'       => 2,
                'opinion'       =>'funciona bien',
                'f_opinion'     =>'2022-17-16',
                'estado'        =>'activo',
            ],
            [
                'articulo_id'   => 20,
                'user_id'       => 1,
                'opinion'       =>'execelente',
                'f_opinion'     =>'2022-11-18',
                'estado'        =>'activo',
            ],
        ];
        DB::table('opiniones_artcs')->insert($data);
    }
}
