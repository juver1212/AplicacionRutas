@extends('layouts.app')

@section('titulo')
    Lista de clientes
@stop

@section('content')
<div class="row">
  <div class="col-md-10">
   <h3>Lista de clientes</h3>
  </div>
  <div class="col-md-2">
    <a class="btn btn-primary btn-primary" href="{{ url('/') }}/clientes/nuevo">Crear nuevo cliente</a>
  </div>
</div>
<br>
<div class="col-md-12">
<div class="row justify-content-center">
  @if($clientes->count() > 0)
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Numero</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
       @foreach($clientes as $cliente)
       <tr>
        <td>
              {{$cliente->nombre}}</a>
        </td>
        <td>
              {{$cliente->tipo_documento}}</a>
        </td>
        <td>
              {{$cliente->numero_documento}}</a>
        </td>
        <td>
            <a class="btn btn-success btn-sm" href="clientes/{{$cliente->id_cliente}}/edit">Editar</a>
        </td>
        <td>
            <form action="{{url('/')}}/clientes/{{$cliente->id_cliente}}" rol="form" method = "POST" id="FormEliminarCliente">
            {{method_field('DELETE') }}
            {{ csrf_field()}}
            <button type="button" onclick="EliminarCliente('{{$cliente->nombre}}')" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
           
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
   function EliminarCliente(cliente) {
    if(confirm('¿Estas seguro de eliminar al cliente '+ cliente+ '?'))
    {
      document.all["FormEliminarCliente"].submit(); 
    }
  }

</script>
@stop
