@extends('layouts.app')

@section('titulo')
    Lista de placas
@stop

@section('content')
<div class="row">
  <div class="col-md-10">
   <h3>Lista de automoviles</h3>
  </div>
  <div class="col-md-2">
    <a class="btn btn-primary btn-primary" href="{{ url('/') }}/automoviles/nuevo">Crear nuevo automovil</a>
  </div>
</div>
<br>
<div class="col-md-12">
<div class="row justify-content-center">
  @if($automoviles->count() > 0)
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Sobrenombre</th>
        <th>Placa</th>
        <th>Movil</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
       @foreach($automoviles as $automovil)
       <tr>
        <td>
              {{$automovil->alias}}</a>
        </td>
        <td>
              {{$automovil->placa}}</a>
        </td>
        <td>
              {{$automovil->numero_movil}}</a>
        </td>
        <td>
            <a class="btn btn-success btn-sm" href="automoviles/{{$automovil->id_automovil}}/edit">Editar</a>
        </td>
         <td>
            <form action="{{url('/')}}/automoviles/{{$automovil->id_automovil}}" rol="form" method = "POST" id="FormEliminarAutomovil">
            {{method_field('DELETE') }}
            {{ csrf_field()}}
            <button type="button" onclick="EliminarAutomovil('{{$automovil->alias}}')" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
           
        </td>
    
       </tr>
       @endforeach
    </tbody>
  </table>
  @else
  <h6>No se encontraron registros</h6>
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
