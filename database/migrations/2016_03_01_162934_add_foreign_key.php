<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('proyectos', function($table)
        {
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
        Schema::table('proyectos', function($table)
        {
            $table->dropForeign('proyectos_cliente_id_foreign');
        });
    }
}
