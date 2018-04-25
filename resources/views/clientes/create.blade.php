@extends('layouts.app')

@section('titulo')
Nuevo cliente
@stop

@section('content')

  <form action="{{ url('/') }}/clientes" rol="form" method = "POST">
  	{{ csrf_field()}}
  	<legend>Nuevo cliente</legend>
	<br>
	 @include('clientes.formulario_crear_cliente')

  <button type="submit" class="btn btn-primary btn-primary">Agregar Cliente</button>
</form>

@stop
