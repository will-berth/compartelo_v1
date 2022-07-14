<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
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
                'categoria' => 'Limpieza',
                'icono'     => 'icofont-recycle-alt'
            ],
            [
                'categoria' => 'Abarrotes',
                'icono'     => 'icofont-cart'
            ],
            [
                'categoria' => 'Educacion',
                'icono'     => 'icofont-book'
            ],
        ];
        DB::table('categorias')->insert($data);
    }
}
