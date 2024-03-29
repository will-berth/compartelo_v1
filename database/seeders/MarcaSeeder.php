<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
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
                'marca'     => 'truper',
                'img'       => 'truper1.jpg',
            ],
            [
                'marca'     => 'nissan',
                'img'       => 'nissan.jpg',
            ],
            [
                'marca'     => 'adidas',
                'img'       => 'adidas.png',
            ],
            [
                'marca'     => 'apple',
                'img'       => 'apple.jpg',
            ],
            [
                'marca'     => 'bellota',
                'img'       => 'bellota.jpg',
            ],
            [
                'marca'     => 'bosch',
                'img'       => 'bosch.jpg',
            ],
            [
                'marca'     => 'bose',
                'img'       => 'bose.png',
            ],
            [
                'marca'     => 'ford',
                'img'       => 'ford.png',
            ],
            [
                'marca'     => 'hamilton',
                'img'       => 'hamilton.jpg',
            ],
            [
                'marca'     => 'honda',
                'img'       => 'honda.jpg',
            ],
            [
                'marca'     => 'hp',
                'img'       => 'hp.jpg',
            ],
            [
                'marca'     => 'husqvarna',
                'img'       => 'husqvarna.png',
            ],
            [
                'marca'     => 'italika',
                'img'       => 'italika.png',
            ],
            [
                'marca'     => 'iusa',
                'img'       => 'iusa.png',
            ],
            [
                'marca'     => 'lacoste',
                'img'       => 'lacoste.png',
            ],
            [
                'marca'     => 'lenovo',
                'img'       => 'lenovo.png',
            ],
            [
                'marca'     => 'lg',
                'img'       => 'lg.jpg',
            ],
            [
                'marca'     => 'microsoft',
                'img'       => 'microsoft.png',
            ],
            [
                'marca'     => 'nike',
                'img'       => 'nike.jpg',
            ],
            
            [
                'marca'     => 'pretul',
                'img'       => 'pretul.jpg',
            ],
            [
                'marca'     => 'samsung',
                'img'       => 'samsung.jpg',
            ],
            [
                'marca'     => 'sony',
                'img'       => 'sony.jpg',
            ],
            [
                'marca'     => 'sterling',
                'img'       => 'sterling.jpg',
            ],
            [
                'marca'     => 'stihl',
                'img'       => 'stihl.png',
            ],
            [
                'marca'     => 'taurus',
                'img'       => 'taurus.png',
            ],
            [
                'marca'     => 'whal',
                'img'       => 'whal.jpg',
            ],
            [
                'marca'     => 'yamaha',
                'img'       => 'yamaha.jpg',
            ],

        ];
        DB::table('marcas')->insert($data);
    }
}
