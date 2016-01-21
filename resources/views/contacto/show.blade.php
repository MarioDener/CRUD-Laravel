@extends('layouts.default')

@section('content')
<h1>Contactos</h1>
<table>
  <thead>
    <tr>

    <th>id</th>
    <th>Usuario</th>
    <th>Nombre</th>
    <th>Apellido</th>
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
      <td>
        <a href="#">Editar</a>
        <a href="#">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
