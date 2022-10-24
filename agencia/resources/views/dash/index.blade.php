@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
@can('user')    
<div class="card w-80">
  <div class="card-body">
    <h1 class="h2">Bienvenido,  {{ Auth::user()->name }} !</h1>
    <p class="card-text">Para volver a la página principal, selecciona el botón.</p>
    <a href="/" class="btn btn-primary">Volver a la Página Principal</a>
  </div>
</div>
@endcan

@can('package.create')    
<div class="card w-80">
  <div class="card-body">
    <h1 class="h2">Bienvenido,  {{ Auth::user()->name }} !</h1>
    <p class="card-text">Haz Ingresado como Administrador</p>

    <a href="/" class="btn btn-primary">Volver a la Página Principal</a>
  </div>
</div>

        <div class="row">
        <div class="col-lg col-5">

        <div class="small-box bg-info">
        <div class="inner">
        <h3>{{ App\Models\City::count() }}</h3>
        <p>Ciudades</p>
        </div>
        <div class="icon">
        <i class="fas fa-map-marker"></i>
        </div>
        <a href="/cities" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg col-5">

        <div class="small-box bg-success">
        <div class="inner">
        <h3>{{ Auth::user()->count()  }}
          </h3>
        <p>Usuarios</p>
        </div>
        <div class="icon">
        <i class="fas fa-user"></i>
        </div>
        <a href="/users" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg col-5">

        <div class="small-box bg-warning">
        <div class="inner">
        <h3>{{ App\Models\Hotel::count() }}</h3>
        <p>Hoteles</p>
        </div>
        <div class="icon">
        <i class="fas fa-hotel"></i>
        </div>
        <a href="/hotels" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg col-5">

        <div class="small-box bg-danger">
        <div class="inner">
        <h3>{{ App\Models\Transport::count() }}</h3>
        <p>Transportes</p>
        </div>
        <div class="icon">
        <i class="fas fa-bus"></i>
        </div>
        <a href="/transports" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg col-5">

        <div class="small-box bg-info">
        <div class="inner">
        <h3>{{ App\Models\Guide::count() }}</h3>
        <p>Guías</p>
        </div>
        <div class="icon">
        <i class="fas fa-walking"></i>
        </div>
        <a href="/guides" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        </div>


@endcan


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop