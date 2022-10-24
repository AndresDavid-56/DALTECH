@extends('adminlte::page')

@section('title', 'Editar Ciudad')

@section('content_header')
    <h1>Editar Ciudad</h1>
@stop

@section('content')

<form action="/cities/{{$city->id}}" method="POST">
   @csrf
   @method('PUT')
   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-10">
    <input value="{{$city->city_name}}" name="city_name" id="city_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    </div>

   <a href="/cities" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary">Editar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop