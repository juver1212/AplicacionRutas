@extends('layouts.app')

@section('titulo')

@stop

@section('content')

<div class="container">
  <form action="{{url('/')}}/automoviles/{{$automovil->id_automovil}}" rol="form" method = "POST">
  	{{method_field('PATCH') }}
    {{ csrf_field()}}

  	<legend>Actualizar Automovil</legend><br>

  @include('automoviles.formulario_crear_automovil')

  <button type="submit" class="btn btn-primary btn-primary">Actualizar</button>
</form>
  </div>
@stop
