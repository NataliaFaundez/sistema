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
        
        Schema::table('proyectos', function($table)
        {
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
        });
        Schema::table('usuarios', function($table)
        {
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
        });
        Schema::table('encuestas', function($table)
        {
            $table->foreign('modelo_id')->references('id')->on('modelos'); 
        });
        Schema::table('modelos', function($table)
        {
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
        Schema::table('proyectos', function($table)
        {
            $table->dropForeign('proyectos_cliente_id_foreign');
        });
        Schema::table('encuestas', function($table)
        {
            $table->dropForeign('encuestas_modelo_id_foreign');
        });
        Schema::table('usuarios', function($table)
        {
            $table->dropForeign('usuarios_cliente_id_foreign');
        });
        Schema::table('modelos', function($table)
        {
            $table->dropForeign('modelos_proyecto_id_foreign');
        });

    }
}
