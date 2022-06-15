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
                'categoria' => 'Limpieza'
            ],
            [
                'categoria' => 'Abarrotes'
            ],
            [
                'categoria' => 'Educacion'
            ],
        ];
        DB::table('categorias')->insert($data);
    }
}
