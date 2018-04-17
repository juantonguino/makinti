<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('direccion');
            $table->text('email');
            $table->bigInteger('telefono');
            $table->bigInteger('movil');
            $table->text('facebook-page');
            $table->text('twitter-page');
            $table->text('youtube-page');
            $table->text('instagram-page');
            $table->decimal('latitud',10,6);
            $table->decimal('longitud',10,6);

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
        Schema::dropIfExists('contacto');
    }
}
