<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id_direccion');
            $table->unsignedInteger('id_empresa');
            $table->unsignedInteger('id_cliente');
            $table->string('cod_ubigeo');
            $table->string('des_direccion');
            $table->decimal('lalitud');
            $table->decimal('longitud');
            $table->string('tipo_persona');
            $table->string('estado');
            $table->string('usuario_crea');
            $table->string('usuario_modi');
            $table->timestamps();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
