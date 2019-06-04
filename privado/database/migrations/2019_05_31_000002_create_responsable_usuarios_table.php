<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsableUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::disableForeignKeyConstraints();
        Schema::create('responsableusuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idresponsable')->unsigned();
            $table->string('usuarioidea', 11);
            $table->foreign('idresponsable')->references('id')->on('responsable');
            $table->unique(array('idresponsable', 'usuarioidea'));
        });
        //Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsableusuario');
    }
}
