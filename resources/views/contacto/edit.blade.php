@extends('layouts.default')

@section('content')
<h2>Editar Contacto
  @if(isset($contacto))
  de
  {{$contacto->usuario}}
  @endif
</h2>

<form action="{{route('post_contactos_edit',$contacto->id)}}" method="post">
{{ csrf_field() }}

<input type="hidden" name="_method" value="patch">

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
  <input type="text" class="form-control" name="apellido" value="{{$contacto->apellido}}">
</div>
<div class="form-group">
  <label for="usuario">Telefono</label>
  <input type="text" class="form-control" name="telefono" value="{{$contacto->telefono}}">
</div>
<div class="form-group">
  <label for="usuario">Email</label>
  <input type="email" class="form-control" name="email" value="{{$contacto->email}}">
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar">
</div>
</form>

@stop
