<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('usuario_id');
            $table->unsignedBigInteger('quarto_id');
            $table->foreign('quarto_id')->references('id')->on('quartos');
            $table->integer('num_de_convidados');
            $table->string('chegada');
            $table->string('partida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
