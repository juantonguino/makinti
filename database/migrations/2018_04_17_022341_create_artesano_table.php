<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesano', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('tecnica');
            $table->text('resenia');
            $table->text('descripcion');
            $table->text('foto');

            $table->integer('taller-id')->unsigned();
            $table->foreign('taller-id')->references('id')->on('taller')->onDelete('cascade');

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
        Schema::dropIfExists('artesano');
    }
}
