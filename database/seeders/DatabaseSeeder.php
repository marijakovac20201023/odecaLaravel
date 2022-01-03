<?php

namespace Database\Seeders;

use App\Models\Kategorija;
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
        //popunjavamo tabelu usera sa nekim random korisnicima
       \App\Models\User::factory(10)->create();

       //tabelu kategorijas popunjavamo sa 4 predefinisane kategorije koje su kreirane u KategorijaSeeder-u
       $ks = new KategorijaSeeder();
       $ks->run();



       $os = new OdecaSeeder();
       $os->run();

       $ps = new PorudzbinaSeeder();
       $ps->run();

    }
}
