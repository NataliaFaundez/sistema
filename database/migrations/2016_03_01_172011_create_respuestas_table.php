<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('respuestas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('respuesta');
            $table->date('fecha');
            $table->integer('pregunta_id');
            $table->integer('encuesta_id');
            $table->timestams();
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
        Schema::drop('respuestas');
    }
}
