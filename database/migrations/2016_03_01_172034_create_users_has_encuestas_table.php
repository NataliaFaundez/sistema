<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usershasencuestas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('folio');
            $table->date('fecha');
            $table->integer('modelo_id');
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
        Schema::drop('encuestas');
    }
}
