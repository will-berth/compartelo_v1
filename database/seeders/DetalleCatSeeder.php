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
        ];
        DB::table('detalles_categorias')->insert($data);
    }
}
