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
            $table->foreign('idUnidad')->references('id')->on('unidad');
            $table->integer('idFiscal')->unsigned()->index()->nullable();
            $table->foreign('idFiscal')->references('id')->on('fiscal');
            $table->integer('numCarpeta');
            
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
