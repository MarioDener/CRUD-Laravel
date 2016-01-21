@extends('layouts.default')
@section('content')
<h2>Crear Contacto</h2>

<form class="" action="{{route('post_contactos_create')}}" method="post">
{{ csrf_field() }}
<div class="form-group">
  <label for="usuario">Usuario</label>
  <input type="text" class="form-control" name="usuario" value="">
</div>
<div class="form-group">
  <label for="nombre">Nombre</label>
  <input type="text" class="form-control" name="nombre" value="">
</div>
<div class="form-group">
  <label for="apellido">Apellido</label>
  <input type="text" class="form-control" name="apellido" value="">
</div>
<div class="form-group">
  <label for="telefono">Telefono</label>
  <input type="text" class="form-control" name="telefono" value="">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" value="">
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="name" value="Guardar">
</div>
</form>

@stop
