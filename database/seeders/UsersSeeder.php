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
                'nombre'        => 'Miguel López',
                'f_nacimiento'  => '2001-07-07',
                'sexo'          => 'Masculino',
                'telefono'      => '9191513420',
                'usuario'      => 'Miguel-js',
                'email'         => 'winalllpz@gmail.com',
                'password'      => Hash::make(1234),
                'ine_frontal'   => 'ine_frontal.jpg',
                'ine_reverso'   => 'ine_reverso.jpg',
                'comprobante'   => 'comprobante.jpg',
                'saldo'         => 4500,
                'ciudad'        => 'México',
                'estado'        => 'Chiapas',
                'municipio'     => 'Ocosingo',
                'cp'            => 29950,
                'colonia'       => 'Bonampack',
                'calle'         => 'Yaxchilan',
                'estado'        => 'Chiapas',
                'n_exterior'    => 18,
                'referencia'    => 'Auna cuadra de la tortilleria',
                
            ],
            [
                'nombre'        => 'Miguel López',
                'f_nacimiento'  => '2001-07-07',
                'sexo'          => 'Masculino',
                'telefono'      => '9191513421',
                'usuario'      => 'jesus-js',
                'email'         => 'miguel@gmail.com',
                'password'      => Hash::make(1234),
                'ine_frontal'   => 'ine_frontal.jpg',
                'ine_reverso'   => 'ine_reverso.jpg',
                'comprobante'   => 'comprobante.jpg',
                'saldo'         => 4500,
                'ciudad'        => 'México',
                'estado'        => 'Chiapas',
                'municipio'     => 'Ocosingo',
                'cp'            => 29950,
                'colonia'       => 'Bonampack',
                'calle'         => 'Yaxchilan',
                'estado'        => 'Chiapas',
                'n_exterior'    => 29,
                'referencia'    => 'Auna cuadra de la tortilleria',
                
            ],
        ];
        DB::table('users')->insert($data);
    }
}
