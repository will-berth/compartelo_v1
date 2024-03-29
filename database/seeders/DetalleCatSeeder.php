<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            [
                'categoria_id'  => 2,
                'articulo_id'   => 1
            ],
            [
                'categoria_id'  => 1,
                'articulo_id'   => 2
            ],
            [
                'categoria_id'  => 2,
                'articulo_id'   => 3
            ],
            [
                'categoria_id'  => 3,
                'articulo_id'   => 4
            ],
            [
                'categoria_id'  => 9,
                'articulo_id'   => 5
            ],
            [
                'categoria_id'  => 11,
                'articulo_id'   => 6
            ],
            [
                'categoria_id'  => 14,
                'articulo_id'   => 7
            ],
            [
                'categoria_id'  => 19,
                'articulo_id'   => 8
            ],
            [
                'categoria_id'  => 15,
                'articulo_id'   => 9
            ],
            [
                'categoria_id'  => 6,
                'articulo_id'   => 10
            ],
            [
                'categoria_id'  => 19,
                'articulo_id'   => 11
            ],
            [
                'categoria_id'  => 23,
                'articulo_id'   => 12
            ],
            [
                'categoria_id'  => 29,
                'articulo_id'   => 13
            ],
            [
                'categoria_id'  => 27,
                'articulo_id'   => 14
            ],
            [
                'categoria_id'  => 28,
                'articulo_id'   => 15
            ],
            [
                'categoria_id'  => 18,
                'articulo_id'   => 16
            ],
            [
                'categoria_id'  => 2,
                'articulo_id'   => 17
            ],
            [
                'categoria_id'  => 7,
                'articulo_id'   => 18
            ],
            [
                'categoria_id'  => 25,
                'articulo_id'   => 19
            ],
            [
                'categoria_id'  => 27,
                'articulo_id'   => 20
            ],
        ];
        DB::table('detalles_categorias')->insert($data);
    }
}
