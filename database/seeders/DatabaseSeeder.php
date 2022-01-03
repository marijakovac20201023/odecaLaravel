<?php

namespace Database\Seeders;

use App\Models\Porudzbina;
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
       $os = new OdecaSeeder();
       $os->run();

       $ps = new PorudzbinaSeeder();
       $ps->run();
    }
}
