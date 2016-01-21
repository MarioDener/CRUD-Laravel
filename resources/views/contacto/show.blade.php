@extends('layouts.default')

@section('content')
<h2>Contactos</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>Usuario</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>E-mail</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contactos as $contacto)
    <tr>
      <td>{{$contacto->id}}</td>
      <td>{{$contacto->usuario}}</td>
      <td>{{$contacto->nombre}}</td>
      <td>{{$contacto->apellido}}</td>
      <td>{{$contacto->email}}</td>
      <td class="text-center">
        <a class="btn btn-default" href="{{route("get_contactos_edit",$contacto->id)}}">Editar</a>
        <a class="btn btn-danger" href="{{route('get_contactos_delete',$contacto->id)}}">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
