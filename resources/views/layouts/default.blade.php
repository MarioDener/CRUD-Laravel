<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD Laravel</title>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <h1>Contact App</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills">
            <li><a href="/">Inicio</a></li>
            <li><a href="{{route('get_contactos_create')}}">Crear</a></li>
            <li><a href="{{route('get_contactos_create')}}">Registro con Facebook</a></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        @yield('content')
      </div>
    </div>

  </body>
</html>
