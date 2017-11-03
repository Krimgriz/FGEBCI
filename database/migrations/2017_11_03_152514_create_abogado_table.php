<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbogadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('primerAp',50);
            $table->string('segundoAp',50);
            $table->string('cedulaProf',50);
            $table->string('sector',50);
            $table->integer('idDomicilio')->unsigned()->index()->nullable();
            $table->foreign('idDomicilio')->references('id')->on('domicilio');
            $table->string('telefono',24);
            $table->string('correo',50);
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
        Schema::dropIfExists('abogado');
    }
}
