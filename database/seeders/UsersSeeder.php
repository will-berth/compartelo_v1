<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
                'nombre'        => 'Miguel de jesús López López',
                'f_nacimiento'  => '2001-07-07',
                'sexo'          => 'Masculino',
                'telefono'      => '9191513420',
                'usuario'       => 'Miguel-js',
                'email'         => 'winalllpz@gmail.com',
                'password'      => Hash::make(1234),
                'ine_frontal'   => 'ine_frontal.jpg',
                'ine_reverso'   => 'ine_reverso.jpg',
                'comprobante'   => 'comprobante.jpg',
                'saldo'         => 0,
                'ciudad'        => 'México',
                'estado'        => 'Chiapas',
                'municipio'     => 'Ocosingo',
                'cp'            => 29950,
                'colonia'       => 'Bonampack',
                'calle'         => 'Yaxchilan',
                'estado'        => 'Chiapas',
                'n_exterior'    => 18,
                'referencia'    => 'A una cuadra de la torre telcel',
                'coordenadas'   => '17.299422856975255, -92.42626930226666',
                
            ],
            [
                'nombre'        => 'Diana Berenice Rodriguez Aguilar',
                'f_nacimiento'  => '2000-06-08',
                'sexo'          => 'Femenino',
                'telefono'      => '9191595287',
                'usuario'       => 'dayana#006',
                'email'         => 'dianaaguilarjunio@gmail.com',
                'password'      => Hash::make(1234),
                'ine_frontal'   => 'ine_frontal1.jpg',
                'ine_reverso'   => 'ine_reverso1.jpg',
                'comprobante'   => 'comprobante1.jpg',
                'saldo'         => 0,
                'ciudad'        => 'México',
                'estado'        => 'Chiapas',
                'municipio'     => 'Ocosingo',
                'cp'            => 29950,
                'colonia'       => 'Puerto arturo',
                'calle'         => 'S/N',
                'estado'        => 'Chiapas',
                'n_exterior'    => 12,
                'referencia'    => 'Es en un porton negro',
                'coordenadas'   => '16.915938331251244, -92.08975150664936',
                
            ],
        ];
        DB::table('users')->insert($data);
    }
}
