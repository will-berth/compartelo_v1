<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuarios extends Seeder
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
                'nombres' => 'Limpieza'
            ,
                'app' => 'Abarrotes'
          ,
                'apm' => 'Educacion'
                ,
                'f_nacimiento' => 'Educacion'
                ,
                'sexo' => 'Educacion'
                ,
                'telefono' => 'Educacion'
                ,
                'nom_user' => 'Educacion'
                ,
                'email' => 'Educacion'
                ,
                'password' => 'Educacion'
                ,
                'foto_per' => 'Educacion'
                ,
                'ine_frontal' => 'Educacion'
                ,
                'ine_reverso' => 'Educacion'
                ,
                'email_verif' => 'Educacion'
                ,
                'estatus' => 'Educacion'
                ,
                'saldo' => 'Educacion'
                ,
                'ciudad' => 'Educacion'
                ,
                'estado' => 'Educacion'
                ,
                'municipio' => 'Educacion'
                ,
                'cp' => 'Educacion'
                ,
                'colonia' => 'Educacion'
                ,
                'calle' => 'Educacion'
                ,
                'n_exterior' => 'Educacion'
                ,
                'n-interior' => 'Educacion'
                ,
                'referencia' => 'Educacion'

            ],
        ];
        DB::table('usuarios')->insert($data);
    }
}
