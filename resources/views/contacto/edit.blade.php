@extends('layouts.default')

@section('content')
<h1>Editar Contacto
  @if(isset($contacto))
  de
  {{$contacto->usuario}}
  @endif
</h1>

<form class="{{route('post_contactos_edit',$contacto->id)}}" action="index.html" method="post">
{{ csrf_field() }}
<div class="form-group">
  <label for="usuario">Usuario</label>
  <input type="text" class="form-control" name="usuario" value="{{$contacto->usuario}}">
</div>
<div class="form-group">
  <label for="usuario">Nombre</label>
  <input type="text" class="form-control" name="name" value="{{$contacto->nombre}}">
</div>
<div class="form-group">
  <label for="usuario">Apellido</label>
  <input type="text" class="form-control" name="name" value="{{$contacto->apellido}}">
</div>
<div class="form-group">
  <label for="usuario">Telefono</label>
  <input type="text" class="form-control" name="name" value="{{$contacto->telefono}}">
</div>
<div class="form-group">
  <label for="usuario">Email</label>
  <input type="email" class="form-control" name="name" value="{{$contacto->email}}">
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="name" value="Actualizar">
</div>
</form>

@stop
