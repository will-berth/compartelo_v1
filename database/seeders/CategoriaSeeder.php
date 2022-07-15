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
                'categoria' => 'Limpieza',
                'icono'     => 'icofont-recycling-man'
            ],
            [ 
                'categoria' => 'Hogar',
                'icono'     => 'icofont-home'
            ],
            [   
                'categoria' => 'Vehiculos',
                'icono'     => 'icofont-auto-mobile'
            ],


            [   'categoria' => 'Agro',
                'icono'     => 'icofont-tree'
            ],

            [   'categoria' => 'Coleccion',
                'icono'     => 'icofont-bank'
            ],

            [   'categoria' => 'Papeleria',
                'icono'     => 'icofont-pen-holder-alt-1'
            ],

            [   'categoria' => 'Moticleta',
                'icono'     => 'icofont-motor-biker'
            ],

            [   'categoria' => 'Computacion',
                'icono'     => 'icofont-computer'
            ],
                
            [   'categoria' => 'Consolas',
                'icono'     => 'icofont-game-pad'
            ],

            [   'categoria' => 'Construcción',
                'icono'     => 'icofont-under-construction-alt'
            ],

            [   'categoria' => 'Deportes',
                'icono'     => 'icofont-soccer'
            ],

            
            [   'categoria' => 'Electronica',
                'icono'     => 'icofont-micro-chip'
            ],

            [   'categoria' => 'Herramientas',
                'icono'     => 'icofont-repair'
            ],

            [   'categoria' => 'Inmuebles',
                'icono'     => 'icofont-court'
            ],

            [   'categoria' => 'Musica',
                'icono'     => 'icofont-guiter'
            ],

            [   'categoria' => 'Eventos',
                'icono'     => 'icofont-cheer-leader'
            ],

            [   'categoria' => 'Libros',
                'icono'     => 'icofont-notebook'
            ],

            [   'categoria' => 'Carpinteria',
                'icono'     => 'icofont-farmer-alt'
            ],

            [   'categoria' => 'Cocina',
                'icono'     => 'icofont-culinary'
            ],

            [   'categoria' => 'Electrodomesticos',
                'icono'     => 'icofont-automation'
            ],

            [   'categoria' => 'Oficina',
                'icono'     => 'icofont-ui-office'
            ],

            [   'categoria' => 'Educacion',
                'icono'     => 'icofont-graduate-alt'
            ],

            [   'categoria' => 'Exteriores',
                'icono'     => 'icofont-ui-travel'
            ],

            [   'categoria' => 'Viajes',
                'icono'     => 'icofont-travelling'
            ],

            [   'categoria' => 'Ropas',
                'icono'     => 'icofont-jersey'
            ],

            [   'categoria' => 'Esteticas',
                'icono'     => 'icofont-ui-cut'
            ],

            [   'categoria' => 'Calzados',
                'icono'     => 'icofont-boot-alt-2'
            ],

            [   'categoria' => 'Servicios',
                'icono'     => 'icofont-users-alt-2'
            ],

            [   'categoria' => 'Maquinaria',
                'icono'     => 'icofont-vehicle-trucktor'
            ],

            
        ];
        DB::table('categorias')->insert($data);
    }
}
