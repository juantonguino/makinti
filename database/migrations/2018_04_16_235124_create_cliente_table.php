<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->date('fecha-nacimiento');
            $table->enum('comunidad', ['Afro', 'Indigena', 'Gitano']);
            $table->enum('sexo', ['Hombre', 'Mujer', 'Oreo']);
            $table->date('fecha-inicio-menbresia');
            $table->date('fecha-fin-menbresia');

            $table->integer('user-id')->unsigned();
            $table->foreign('user-id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('cliente');
    }
}
