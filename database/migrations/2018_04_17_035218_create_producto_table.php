<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('color');
            $table->integer('calificacion');
            $table->text('condiciones-entrega');
            $table->text('imgen');
            $table->text('materiales');
            $table->enum('tipo-produccion',['En serie','Exclisiva']);
            $table->integer('cantidad-disponible');
            $table->bigInteger('precio');
            $table->boolean('fragil');
            $table->decimal('tamanio-alto', 5, 2);
            $table->decimal('tamanio-ancho', 5, 2);
            $table->decimal('tamanio-profundidad', 5, 2);

            $table->integer('artesano-id')->unsigned();
            $table->foreign('artesano-id')->references('id')->on('artesano')->onDelete('cascade');

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
        Schema::dropIfExists('producto');
    }
}
