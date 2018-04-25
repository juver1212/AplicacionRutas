   
   @if($errors->any())
      <div class="alert alert-danger">
    
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>     
      </div>
    @endif

 <div class="form-group row">

  <div class="col-md-3">
    <div class="form-group">
    <label for="codigo">Codigo</label>
    <input name="codigo" class="form-control" value ="{{ old('codigo',isset($cliente) ? $cliente->cod_cliente : '')}}" id="codigo" type="text" placeholder="A200400">
   </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" class="form-control" value ="{{ old('nombre',isset($cliente) ? $cliente->nombre : '')}}" id="nombre" type="text" placeholder="Juan Perez Sombrio" >
   </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
    <label for="tipodoc">Documento</label>
    <select class="form-control" id="tipodoc" name="tipodoc">
      @isset($cliente)
      @if($cliente->tipo_documento == "RUC")
           <option selected>RUC</option>
           <option>DNI</option>
      @else
          <option>RUC</option>
          <option selected>DNI</option>
      @endif
      @endisset
      @empty($cliente)
          <option>RUC</option>
          <option>DNI</option>
      @endempty
    
    </select>
  </div>
  </div>

</div>

 <div class="form-group row">

  <div class="col-md-3">
    <div class="form-group">
    <label for="numerodoc">Numero</label>
    <input name="numerodoc" class="form-control" value ="{{ old('numerodoc',isset($cliente) ? $cliente->numero_documento : '')}}" id="numerodoc" type="text" placeholder="10778222847">
   </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
    <label for="email">Correo Electronico</label>
    <input name="email" class="form-control" value ="{{ old('email',isset($cliente) ? $cliente->email : '')}}" id="email" type="email" placeholder="Juan@gmail.com">
   </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" id="estado" name="estado">
     @isset($cliente)
      @if($cliente->estado == "A")
           <option selected>A</option>
           <option>B</option>
      @else
          <option>A</option>
          <option selected>B</option>
      @endif
      @endisset
      @empty($cliente)
          <option>A</option>
          <option>B</option>
      @endempty
    </select>
  </div>
  </div>

</div>

