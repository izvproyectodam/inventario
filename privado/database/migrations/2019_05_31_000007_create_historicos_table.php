<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idbien')->unsigned();
            $table->bigInteger('idresponsableprevio')->unsigned()->nullable();
            $table->bigInteger('idresponsable')->unsigned()->nullable();
            $table->bigInteger('idubicacionprevia')->unsigned()->nullable();
            $table->bigInteger('idubicacion')->unsigned()->nullable();
            $table->string('detalleubicacionprevia')->nullable();
            $table->string('detalleubicacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idbien')->references('id')->on('bien');
            $table->foreign('idresponsable')->references('id')->on('responsable')->onDelete('set null');
            $table->foreign('idubicacion')->references('id')->on('ubicacion')->onDelete('set null');
            $table->foreign('idresponsableprevio')->references('id')->on('responsable')->onDelete('set null');
            $table->foreign('idubicacionprevia')->references('id')->on('ubicacion')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicos');
    }
}
