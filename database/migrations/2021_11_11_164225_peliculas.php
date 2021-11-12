<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {

            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->longText('imagen')->nullable();

            $table->bigInteger('categoria_id')->unsigned()->index();

            $table->string('nombre');
            
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade')->onDelete('restrict');
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
