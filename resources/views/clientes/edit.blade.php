@extends('layouts.app')

@section('titulo')

@stop

@section('content')

<div class="container">
  <form action="{{url('/')}}/clientes/{{$cliente->id_cliente}}" rol="form" method = "POST">
  	{{method_field('PATCH') }}
    {{ csrf_field()}}

  	<legend>Actualizar Cliente</legend><br>

  @include('clientes.formulario_crear_cliente')

  <button type="submit" class="btn btn-primary btn-primary">Actualizar</button>
</form>
  </div>
@stop
