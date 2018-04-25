<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCbguiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbguias', function (Blueprint $table) {
            $table->increments('id_cbguia');
            $table->unsignedInteger('id_empresa');
            $table->string('tipo_documento');
            $table->string('serie');
            $table->string('numero');
            $table->date('fecha_emision');
            $table->string('tipo_documento_ref');
            $table->string('serie_ref');
            $table->string('numero_ref');
            $table->text('observacion');
            $table->string('tipo_doc_remitente');
            $table->string('num_doc_remitente');
            $table->string('tipo_doc_cliente');
            $table->string('num_doc_cliente');
            $table->string('nombre_cliente');
            $table->string('tipo_doc_destino');
            $table->string('num_doc_destino');
            $table->string('nombre_destino');
            $table->string('tipo_doc_transportista');
            $table->string('num_doc_transportista');
            $table->string('nombre_transportista');
            $table->string('motivo_traslado');
            $table->string('modalidad_transporte');
            $table->string('peso_total');
            $table->date('fecha_traslado');
            $table->string('numero_placa');
            $table->string('tipo_doc_conductor');
            $table->string('num_doc_conductor');
            $table->string('nombre_conductor');
            $table->integer('id_direccion_destino');
            $table->string('direccion_destino');
            $table->string('codigo_ubigeo_destino');
            $table->integer('id_direccion_partida');
            $table->string('direccion_partida');
            $table->string('codigo_ubigeo_partida');
            $table->string('cod_almacen');
            $table->string('almacen');
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
       Schema::dropIfExists('cbguias');
    }
}
