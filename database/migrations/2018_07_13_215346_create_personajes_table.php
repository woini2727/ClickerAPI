<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('Especie');
            $table->integer('User');
            $table->double('vida')->default(50);
            $table->double('ataque')->default(1);
            $table->double('Defensa')->default(0);
            $table->text('img')->default("/");
            $table->double('Velocidad')->default(0);
            $table->double('Fuerza')->default(0);
            $table->double('Inteligencia')->default(0);
            $table->timestamps();
            //va
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personajes');
    }
}
