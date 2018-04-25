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
    <label for="alias">Sobrenombre</label>
    <input name="alias" class="form-control" value ="{{ old('alias',isset($automovil) ? $automovil->alias : '')}}" id="alias" type="text" placeholder="Nissan nuevo">
   </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
    <label for="descripcion">Descripción</label>
    <input name="descripcion" class="form-control" value ="{{ old('descripcion',isset($automovil) ? $automovil->descripcion : '')}}" id="descripcion" type="text" placeholder="nissan sentra v16 2017" >
   </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
    <label for="placa">Placa</label>
    <input name="placa" class="form-control" value ="{{ old('placa',isset($automovil) ? $automovil->placa : '')}}" id="placa" type="text" placeholder="A3B 145" >
   </div>
  </div>
  </div>


 <div class="form-group row">
  <div class="col-md-3">
    <div class="form-group">
    <label for="numero_movil">Numero de movil</label>
    <input name="numero_movil" class="form-control" value ="{{ old('numero_movil',isset($automovil) ? $automovil->numero_movil : '')}}" id="numero_movil" type="text" placeholder="997788665">
   </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
    <label for="imei_movil">Emei movil</label>
    <input name="imei_movil" class="form-control" value ="{{ old('imei_movil',isset($automovil) ? $automovil->imei_movil : '')}}" id="imei_movil" type="text" placeholder="355770085234503">
   </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" id="estado" name="estado">
     @isset($automovil)
      @if($automovil->estado == "A")
           <option selected>A</option>
           <option>B</option>
      @else
          <option>A</option>
          <option selected>B</option>
      @endif
      @endisset
      @empty($automovil)
          <option>A</option>
          <option>B</option>
      @endempty
    </select>
  </div>
  </div>

</div>

