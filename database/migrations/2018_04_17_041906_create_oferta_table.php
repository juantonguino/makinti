<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo-oferta', ['Oferta cumpleaños','Oferta ordinaria']);
            $table->decimal('porcentaje-descuento', 4, 2);
            $table->integer('valor-anterior');
            $table->integer('valor-actual');

            $table->integer('producto-id')->unsigned();
            $table->foreign('producto-id')->references('id')->on('producto')->onDelete('cascade');

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
        Schema::dropIfExists('oferta');
    }
}
