@extends('layouts.app')

@section('titulo')
    Lista de Usuarios
@stop

@section('content')
<div class="row">
  <div class="col-md-10">
   <h3>Lista de usuarios</h3>
  </div>
  <div class="col-md-2">
    <a class="btn btn-primary btn-primary" href="{{route('register')}}">Crear nuevo usuario</a>
  </div>
</div>
<br>
<div class="col-md-12">
<div class="row justify-content-center">
  @if($usuarios->count() > 0)
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
       @foreach($usuarios as $usuario)
       <tr>
        <td>
              {{$usuario->name}}</a>
        </td>
        <td>
              {{$usuario->email}}</a>
        </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  @else
  <h5>No se encontraron registros</h5>
  @endif
</div></div>
@endsection

@section('script')

<script>
   function EliminarAutomovil(automovil) {
    if(confirm('¿Estas seguro de eliminar al automovil '+ automovil+ '?'))
    {
      document.all["FormEliminarAutomovil"].submit(); 
    }
  }
</script>
@stop
