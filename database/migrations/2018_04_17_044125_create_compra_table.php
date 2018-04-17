<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('valor-plataforma');
            $table->enum('estado', ['pendiente','enviado','entregado']);
            $table->integer('valor-pagado');
            $table->date('fecha-estimada-entrega');
            
            $table->integer('producto-id')->unsigned();
            $table->foreign('producto-id')->references('id')->on('producto')->onDelete('cascade');
            
            $table->integer('oferta-id')->unsigned()->nullable();
            $table->foreign('oferta-id')->references('id')->on('oferta')->onDelete('cascade');

            $table->integer('cliente-id')->unsigned()->nullable();
            $table->foreign('cliente-id')->references('id')->on('cliente')->onDelete('cascade');

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
        Schema::dropIfExists('compra');
    }
}
