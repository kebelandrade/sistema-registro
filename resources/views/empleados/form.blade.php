<div class="form-group">
    <label for="Nombre" class="">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" class="form-control
    {{  $errors->has('Nombre') ? 'is-invalid' : ''}}"
           value="{{  isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre')}}">

    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" class="form-control
            {{  $errors->has('Apellido') ? 'is-invalid' : ''}}"
           value="{{  isset($empleado->Apellido) ? $empleado->Apellido : old('Apellido')}}">

    {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" class="form-control
            {{  $errors->has('Correo') ? 'is-invalid' : ''}}"
           value="{{  isset($empleado->Correo) ? $empleado->Correo : old('Correo')}}">

    {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Telefono">{{'Telefono'}}</label>
    <input type="text" name="Telefono" id="Telefono" class="form-control
            {{  $errors->has('Telefono') ? 'is-invalid' : ''}}"
           value="{{  isset($empleado->Telefono) ? $empleado->Telefono : old('Telefono')}}">

    {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Foto">{{'Foto'}}</label>

    @if(isset($empleado->Foto))
        <br>
        <img src="{{  asset('storage') . '/' . $empleado->Foto }}" class="img-thumbnail img-fluid"
             alt="" width="200">
        <br>
    @endif

    <input type="file" class="form-control-file {{  $errors->has('Foto') ? 'is-invalid' : ''}}"
           name="Foto" id="Foto" value="">

    {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
</div>


<input type="submit" class="btn btn-success"
       value="{{  $Modo == 'crear' ? 'Agregar empleado' : 'Modificar empleado' }}">

<a href="{{  url('empleados') }}" class="btn btn-danger">Regresar</a>
