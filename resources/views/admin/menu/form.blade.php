<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" id="nombre" class="form-control" name="nombre" value="{{old('nombre')}}"/>
    </div>
  </div>

  <div class="form-group">
    <label for="url" class="col-lg-3 control-label requerido">Url</label>
    <div class="col-lg-8">
    <input type="text" id="url" class="form-control"  name="url" value="{{old('url')}}" required/>
    </div>
  </div>

  <div class="form-group">
    <label for="icono" class="col-lg-3 control-label">Icono</label>
    <div class="col-lg-8">
    <input type="text" id="icono" class="form-control" name="icono" value="{{old('icono')}}"/>
    </div>
  </div>