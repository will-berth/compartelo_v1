<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodoSeeder extends Seeder
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
                'tipo'      => 'Hora',
            ],
            [
                'tipo'      =>'Dia',
            ],
            [
                'tipo'      => 'Semana',
            ],
            [
                'tipo'      => 'Mes',
            ],

            [
                'tipo'      => 'Año',
            ],

        ];
        DB::table('periodos')->insert($data);
    }
}
