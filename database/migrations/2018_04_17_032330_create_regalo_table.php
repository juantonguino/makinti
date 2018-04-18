<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegaloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regalo', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('tipo-regalo');
            $table->integer('costo-envio');
            $table->integer('costo-regalo');

            //$table->integer('cliente-id')->unsigned();
            //$table->foreign('cliente-id')->references('id')->on('cliente')->onDelete('cascade');

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
        Schema::dropIfExists('regalo');
    }
}
