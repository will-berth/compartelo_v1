<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class OpinionSeeder extends Seeder
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
                'id_usuario' =>1,
                'opinion'    =>'buen negociante',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>2,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>2,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'persona responsable de entrega',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'mala persona, no cumple',
                'f_opinion'  =>'2022-09-02',
                'status'     =>'negativa',
                'cali'       =>2,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'responsable',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>8,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'persona, que no cumple',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'recomiendo, le pongo 10',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       => 8,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'excelente servicio',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>2,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'sus herramientas son malas',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'no cumple',
                'f_opinion'  =>'2022-08-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],

            [
                'id_usuario' =>2,
                
                'opinion'    =>'responsable de entregar',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'execelente',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>8,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'no hace entrega de su material',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>2,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'recomiendo esta persona',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'es una persona de buenos principios',
                'f_opinion'  =>'2022-09-12',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>0,
            ],

            [
                'id_usuario' =>1,
                
                'opinion'    =>'entrega su material en tiempo y forma',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>8,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-11',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>1,
                
                'opinion'    =>'no es amable',
                'f_opinion'  =>'2022-09-09',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>1,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'es un usuario malo',
                'f_opinion'  =>'2022-09-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'no sabe negciar',
                'f_opinion'  =>'2022-10-10',
                'status'     =>'negativa',
                'cali'       =>4,
                'tipo'       =>0,
            ],
            [
                'id_usuario' =>2,
                
                'opinion'    =>'buen negociante',
                'f_opinion'  =>'2022-08-10',
                'status'     =>'positiva',
                'cali'       =>10,
                'tipo'       =>1,
            ],



        ];
        DB::table('opiniones')->insert($data);
    }
}
