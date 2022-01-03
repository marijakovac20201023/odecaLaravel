<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odecas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('opis');
            $table->string('proizvedenoU'); 
            $table->string('velicina');
            $table->foreignId('kategorija_id');

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odecas');
    }
}
