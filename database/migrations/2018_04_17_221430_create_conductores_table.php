<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id_conductor');
            $table->unsignedInteger('id_empresa');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('numero_brevete');
            $table->string('estado');
            $table->string('usuario_crea');
            $table->string('usuario_modi');
            $table->timestamps();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductores');
    }
}
