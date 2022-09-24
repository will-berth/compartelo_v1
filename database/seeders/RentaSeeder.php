<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentaSeeder extends Seeder
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
                'user_id'       =>1,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>230,
                'tipo_pago'     =>'efectivo',
                'estado'        => 0,
            ],

            [
                'user_id'       =>2,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>210,
                'tipo_pago'     =>'efectivo',
                'estado'        => 1,
            ],

            [
                'user_id'       =>2,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>220,
                'tipo_pago'     =>'efectivo',
                'estado'        => 1,
            ],

            [
                'user_id'       =>2,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>240,
                'tipo_pago'     =>'efectivo',
                'estado'        => 0,
            ],

            [
                'user_id'       =>1,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>250,
                'tipo_pago'     =>'efectivo',
                'estado'        => 0,
            ],

            [
                'user_id'       =>2,
                'fecha_renta'   =>'2022-10-19',
                'total'         =>300,
                'tipo_pago'     =>'efectivo',
                'estado'        => 1,
            ],    
        ];
        DB::table('rentas')->insert($data);
    }
}
