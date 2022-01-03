<?php

namespace Database\Seeders;

use App\Models\Odeca;
use Illuminate\Database\Seeder;

class OdecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Odeca::factory(15)->create();
    }
}
