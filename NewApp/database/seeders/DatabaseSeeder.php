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


        \App\Models\User2::factory(20)->create();
        \App\Models\Rol::factory(20)->create();
        \App\Models\Configuracion::factory(20)->create();
    }
}
