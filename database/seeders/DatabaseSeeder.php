<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(ArticulosSeeder::class);
        $this->call(DetalleCatSeeder::class);
        $this->call(DepositoSeeder::class);
        $this->call(CaracteristicaSeeder::class);
        $this->call(Calificacion_artcsSeeder::class);
    }
}
