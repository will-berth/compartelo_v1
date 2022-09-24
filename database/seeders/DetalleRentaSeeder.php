<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleRentaSeeder extends Seeder
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
                'renta_id'          =>1,
                'articulo_id'       =>1,
                'cantidad'          =>2,
                'importe'           =>000,
                'fecha_renta'       =>'2022-01-10',
                'fecha_devolucion'  =>'2022-01-15',
                'estado'            => 0,

            ],

            [
                'renta_id'          =>2,
                'articulo_id'       =>2,
                'cantidad'          =>1,
                'importe'           =>000,
                'fecha_renta'       =>'2022-12-19',
                'fecha_devolucion'  =>'2022-12-30',
                'estado'            => 1,

            ],

            [
                'renta_id'          =>3,
                'articulo_id'       =>3,
                'cantidad'          =>2,
                'importe'           =>000,
                'fecha_renta'       =>'2022-09-10',
                'fecha_devolucion'  =>'2022-09-19',
                'estado'            => 0,

            ],

            [
                'renta_id'          =>4,
                'articulo_id'       =>4,
                'cantidad'          =>1,
                'importe'           =>000,
                'fecha_renta'       =>'2022-10-10',
                'fecha_devolucion'  =>'2022-10-13',
                'estado'            => 0,

            ],

            [
                'renta_id'          =>5,
                'articulo_id'       =>5,
                'cantidad'          =>000,
                'importe'           =>230,
                'fecha_renta'       =>'2022-08-01',
                'fecha_devolucion'  =>'2022-08-02',
                'estado'            => 1,

            ],

            [
                'renta_id'          =>6,
                'articulo_id'       =>6,
                'cantidad'          =>3,
                'importe'           =>000,
                'fecha_renta'       =>'2022-10-15',
                'fecha_devolucion'  =>'2022-10-20',
                'estado'            => 0,

            ],

            [
                'renta_id'          =>1,
                'articulo_id'       =>7,
                'cantidad'          =>6,
                'importe'           =>000,
                'fecha_renta'       =>'2022-05-10',
                'fecha_devolucion'  =>'2022-05-13',
                'estado'            => 1,

            ],

            [
                'renta_id'          =>2,
                'articulo_id'       =>8,
                'cantidad'          =>1,
                'importe'           =>000,
                'fecha_renta'       =>'2022-06-06',
                'fecha_devolucion'  =>'2022-06-30',
                'estado'            => 1,

            ],

            [
                'renta_id'          =>3,
                'articulo_id'       =>9,
                'cantidad'          =>1,
                'importe'           =>000,
                'fecha_renta'       =>'2022-12-10',
                'fecha_devolucion'  =>'2022-12-20',
                'estado'            => 0,

            ],

            [
                'renta_id'          =>4,
                'articulo_id'       =>10,
                'cantidad'          =>3,
                'importe'           =>000,
                'fecha_renta'       =>'2022-08-05',
                'fecha_devolucion'  =>'2022-08-10',
                'estado'            => 1,

            ],

        ];
        DB::table('detalles')->insert($data);
    }
}
