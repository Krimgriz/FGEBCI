<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariablesPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPersona')->unsigned()->index()->nullable();
            $table->foreign('idPersona')->references('id')->on('persona');
            $table->integer('edad');
            $table->string('telefono',24);
            $table->string('motivoEstancia',200);
            $table->integer('idOcupacion')->unsigned()->index()->nullable();
            $table->foreign('idOcupacion')->references('id')->on('cat_ocupacion');
            $table->integer('idEstadoCivil')->unsigned()->index()->nullable();
            $table->foreign('idEstadoCivil')->references('id')->on('cat_estado_civil');
            $table->integer('idEscolaridad')->unsigned()->index()->nullable();
            $table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad');
            $table->integer('idRegion')->unsigned()->index()->nullable();
            $table->foreign('idRegion')->references('id')->on('cat_region');
            $table->integer('idDomicilio')->unsigned()->index()->nullable();
            $table->foreign('idDomicilio')->references('id')->on('domicilio');
            $table->string('docIdentificacion',50);
            $table->string('numDocIdentificacion',50);
            $table->string('lugarTrabajo',50);
            $table->integer('idDomicilioTrabajo')->unsigned()->index()->nullable();
            $table->foreign('idDomicilioTrabajo')->references('id')->on('domicilio');
            $table->string('telefonoTrabajo',24);
            $table->string('representanteLegal',24);
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
        Schema::dropIfExists('variables_persona');
    }
}
