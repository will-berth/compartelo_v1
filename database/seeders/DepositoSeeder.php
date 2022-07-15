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
            
        ];
        DB::table('depositos')->insert($data);
    }
}
