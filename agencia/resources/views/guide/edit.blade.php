@extends('adminlte::page')

@section('title', 'Editar Guía')

@section('content_header')
    <h1>Editar Guía</h1>
@stop

@section('content')
<form action="/guides/{{$guide->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre Guía</label>
    <div class="col-sm-10">
    <input value="{{$guide->guide_name}}" name="guide_name" id="guide_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio por Día</label>
    <div class="col-sm-10">
    <input value="{{$guide->price_per_day}}" name="price_per_day" id="price_per_day" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input value="{{$guide->guide_email}}" name="guide_email" id="guide_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
    <input value="{{$guide->guide_phone}}" name="guide_phone" id="guide_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Disponibilidad</label>
    <div class="col-sm-10">
    <select id="guide_available" name="guide_available" class="form-select" aria-label="Default select example">
        <option value="{{$guide->guide_available}}"> -- Seleccione su Disponibilidad -- </option>
          <option value="Disponible">Disponible</option>
          <option value="No Disponible" >No Disponible</option>
        </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-10">
    <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
        <option value="{{$guide->city_id}}"> -- Seleccione su ciudad -- </option>

        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach

        </select>
    </div>
  </div>

    <a href="/guides" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop