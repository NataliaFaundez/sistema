<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proyectos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();  

            $table->foreign('cliente_id')->references('id')->on('clientes'); 
          
                  
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
        Schema::drop('proyectos');
    }
}
