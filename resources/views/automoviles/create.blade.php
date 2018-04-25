@extends('layouts.app')

@section('titulo')
Nuevo automovil
@stop

@section('content')

  <form action="{{ url('/') }}/automoviles" rol="form" method = "POST">
  	{{ csrf_field()}}
  	<legend>Nuevo automovil</legend>
	<br>
	 @include('automoviles.formulario_crear_automovil')

  <button type="submit" class="btn btn-primary btn-primary">Agregar Automovil</button>
</form>

@stop
