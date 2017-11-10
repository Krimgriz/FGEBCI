<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipifDelitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipif_delito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned()->index()->nullable();
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            $table->integer('idDelito')->unsigned()->index()->nullable();
            $table->foreign('idDelito')->references('id')->on('cat_delito')->onDelete('cascade');
            $table->boolean('conViolencia')->default(false);
            $table->integer('idTipoArma')->unsigned()->index()->nullable();
            $table->foreign('idTipoArma')->references('id')->on('cat_tipo_arma')->onDelete('cascade');
            $table->integer('idArma')->unsigned()->index()->nullable();
            $table->foreign('idArma')->references('id')->on('cat_arma')->onDelete('cascade');
            $table->integer('idModalidad')->unsigned()->index()->nullable();
            $table->foreign('idModalidad')->references('id')->on('cat_modalidad')->onDelete('cascade');
            $table->string('formaComision',50);
            $table->string('consumacion',50);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->integer('idZona')->unsigned()->index()->nullable();
            $table->foreign('idZona')->references('id')->on('cat_zona')->onDelete('cascade');
            $table->integer('idLugar')->unsigned()->index()->nullable();
            $table->foreign('idLugar')->references('id')->on('cat_lugar')->onDelete('cascade');
            $table->integer('idDomicilio')->unsigned()->index()->nullable();
            $table->foreign('idDomicilio')->references('id')->on('domicilio')->onDelete('cascade');
            $table->string('entreCalle',100);
            $table->string('yCalle',100);
            $table->string('calleTrasera',100);
            $table->string('puntaReferencia',100);

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
        Schema::dropIfExists('tipif_delito');
    }
}
