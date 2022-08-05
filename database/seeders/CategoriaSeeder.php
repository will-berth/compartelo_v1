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
                'categoria' => 'limpieza',
                'icono'     => 'icofont-recycling-man'
            ],
            [ 
                'categoria' => 'hogar',
                'icono'     => 'icofont-home'
            ],
            [   
                'categoria' => 'vehículos',
                'icono'     => 'icofont-auto-mobile'
            ],


            [   'categoria' => 'agro',
                'icono'     => 'icofont-tree'
            ],

            [   'categoria' => 'colección',
                'icono'     => 'icofont-bank'
            ],

            [   'categoria' => 'papelería',
                'icono'     => 'icofont-pen-holder-alt-1'
            ],

            [   'categoria' => 'motocicleta',
                'icono'     => 'icofont-motor-biker'
            ],

            [   'categoria' => 'computación',
                'icono'     => 'icofont-computer'
            ],
                
            [   'categoria' => 'consolas',
                'icono'     => 'icofont-game-pad'
            ],

            [   'categoria' => 'construcción',
                'icono'     => 'icofont-under-construction-alt'
            ],

            [   'categoria' => 'deportes',
                'icono'     => 'icofont-soccer'
            ],

            
            [   'categoria' => 'electrónica',
                'icono'     => 'icofont-micro-chip'
            ],

            [   'categoria' => 'herramientas',
                'icono'     => 'icofont-repair'
            ],

            [   'categoria' => 'inmuebles',
                'icono'     => 'icofont-court'
            ],

            [   'categoria' => 'música',
                'icono'     => 'icofont-guiter'
            ],

            [   'categoria' => 'eventos',
                'icono'     => 'icofont-cheer-leader'
            ],

            [   'categoria' => 'libros',
                'icono'     => 'icofont-notebook'
            ],

            [   'categoria' => 'carpintería',
                'icono'     => 'icofont-farmer-alt'
            ],

            [   'categoria' => 'cocina',
                'icono'     => 'icofont-culinary'
            ],

            [   'categoria' => 'electrodomésticos',
                'icono'     => 'icofont-automation'
            ],

            [   'categoria' => 'oficina',
                'icono'     => 'icofont-ui-office'
            ],

            [   'categoria' => 'educación',
                'icono'     => 'icofont-graduate-alt'
            ],

            [   'categoria' => 'Exteriores',
                'icono'     => 'icofont-ui-travel'
            ],

            [   'categoria' => 'viajes',
                'icono'     => 'icofont-travelling'
            ],

            [   'categoria' => 'ropas',
                'icono'     => 'icofont-jersey'
            ],

            [   'categoria' => 'estética',
                'icono'     => 'icofont-ui-cut'
            ],

            [   'categoria' => 'calzados',
                'icono'     => 'icofont-boot-alt-2'
            ],

            [   'categoria' => 'servicios',
                'icono'     => 'icofont-users-alt-2'
            ],

            [   'categoria' => 'maquinaria',
                'icono'     => 'icofont-vehicle-trucktor'
            ],

            
        ];
        DB::table('categorias')->insert($data);
    }
}
