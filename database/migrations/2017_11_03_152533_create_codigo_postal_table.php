<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigoPostalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_postal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id');            
            $table->integer('idDomicilio')->unsigned()->index()->nullable();
            $table->foreign('idDomicilio')->references('id')->on('domicilio');
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
        Schema::dropIfExists('codigo_postal');
    }
}
