<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarpetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpeta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnidad')->unsigned()->index()->nullable();
            $table->foreign('idUnidad')->references('id')->on('unidad')->onDelete('cascade');
            $table->integer('idFiscal')->unsigned()->index()->nullable();
            $table->foreign('idFiscal')->references('id')->on('fiscal')->onDelete('cascade');
            $table->integer('numCarpeta');
            $table->date('fechaInicio');
            $table->boolean('conDetenido')->default(false);
            $table->boolean('esRelevante')->default(false);
            $table->string('estadoCarpeta',50);
            $table->dateTime('horaIntervencion');
            $table->string('descripcionHechos',500);
            $table->string('npd',50);
            $table->string('numIph',50);
            $table->date('fechaIph');
            $table->string('narracionIph',2000);
            $table->integer('idTipoDeterminacion')->unsigned()->index()->nullable();
            $table->foreign('idTipoDeterminacion')->references('id')->on('cat_tipo_determinacion')->onDelete('cascade');
            $table->date('fechaDeterminacion');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carpeta');
    }
}
