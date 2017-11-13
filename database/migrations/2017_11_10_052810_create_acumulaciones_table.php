<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcumulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acumulacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpetaP')->unsigned();
            $table->integer('idCarpetaS')->unsigned();
            $table->timestamps();
            
            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acumulacion');
    }
}
