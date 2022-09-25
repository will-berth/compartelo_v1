<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepositoSeeder extends Seeder
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
                'user_id'=> 1,
                'monto'=>45,
                'fecha'=>'2022-10-19',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 2,
                'monto'=>35,
                'fecha'=>'2022-11-10',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 2,
                'monto'=>55,
                'fecha'=>'2022-02-04',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>60,
                'fecha'=>'2022-07-28',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 2,
                'monto'=>100,
                'fecha'=>'2022-12-25',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>90,
                'fecha'=>'2022-03-26',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>300,
                'fecha'=>'2022-03-12',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>250,
                'fecha'=>'2022-11-26',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>75,
                'fecha'=>'2022-01-01',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
            [
                'user_id'=> 1,
                'monto'=>120,
                'fecha'=>'2022-08-28',
                'comprobante'=>'comprobante',
                'estado'=>1,
            ],
  
        ];
        DB::table('depositos')->insert($data);
    }
}
