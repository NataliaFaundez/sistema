<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('modelos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre');
            $table->integer('proyecto_id')->unsigned();
            $table->timestamps();
            $table->foreign('proyecto_id')->references('id')->on('proyectos'); 

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
        Schema::drop('modelos');
    }
}
