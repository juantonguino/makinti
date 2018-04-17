<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('pais');
            $table->text('region');
            $table->text('ciudad');
            $table->text('direccion');
            $table->date('fecha-inicio');
            $table->date('fecha-cierre');

            $table->integer('taller-id')->unsigned();
            $table->foreign('taller-id')->references('id')->on('taller')->onDelete('cascade');
            
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
        Schema::dropIfExists('evento');
    }
}
