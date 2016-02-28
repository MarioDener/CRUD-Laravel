@extends('layouts.default')

@section('content')
<h2>Contactos</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center">id</th>
      <th class="text-center">Usuario</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellido</th>
      <th class="text-center">E-mail</th>
      <th class="text-center">Telefono</th>
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contactos as $contacto)
    <tr>
      <td class="text-center">{{$contacto->id}}</td>
      <td class="text-center">{{$contacto->usuario}}</td>
      <td class="text-center">{{$contacto->nombre}}</td>
      <td class="text-center">{{$contacto->apellido}}</td>
      <td class="text-center">{{$contacto->email}}</td>
      <td class="text-center">{{$contacto->telefono}}</td>
      <td class="text-center" class="text-center">
        <a class="btn btn-default" href="{{route("get_contactos_edit",$contacto->id)}}">Editar</a>
        <a class="btn btn-danger" href="{{route('get_contactos_delete',$contacto->id)}}">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
