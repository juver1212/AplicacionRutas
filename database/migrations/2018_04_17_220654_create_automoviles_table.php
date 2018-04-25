<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            $table->increments('id_automovil');
            $table->unsignedInteger('id_empresa');
            $table->string('alias');
            $table->string('descripcion');
            $table->string('placa');
            $table->string('estado');
            $table->string('numero_movil');
            $table->string('imei_movil');
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
        Schema::dropIfExists('automoviles');
    }
}
