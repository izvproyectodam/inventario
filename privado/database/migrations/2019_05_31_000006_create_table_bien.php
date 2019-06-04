<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::disableForeignKeyConstraints();
        Schema::create('bien', function (Blueprint $table) {
            //$table->primary(array('id'));
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idresponsable')->unsigned();
            $table->bigInteger('idtipo')->unsigned();
            $table->string('descripcion')->nullable();
            $table->integer('numero')->unsigned();
            $table->string('marca', 50)->nullable();
            $table->string('modelo', 100)->nullable();
            $table->string('ns', 30)->nullable();
            $table->string('ise', 30)->nullable();
            $table->bigInteger('idubicacion')->unsigned();
            $table->string('detalleubicacion')->nullable();
            $table->bigInteger('idprocedencia')->unsigned();
            $table->text('observaciones')->nullable();
            $table->string('motivo')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idresponsable')->references('id')->on('responsable');
            $table->foreign('idtipo')->references('id')->on('tipo');
            $table->foreign('idubicacion')->references('id')->on('ubicacion');
            $table->foreign('idprocedencia')->references('id')->on('procedencia');
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
        Schema::dropIfExists('inventario');
    }
}
