@extends('adminlte::page')

@section('title', 'Crear Transporte')

@section('content_header')
    <h1>Transporte</h1>
@stop

@section('content')
<h2> Crear Transporte </h2>

<form action="/transports" method="POST">
   @csrf
   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
    <input required name="description_transport" id="description_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Capacidad</label>
    <div class="col-sm-10">
    <input required name="capacity_transport" id="capacity_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio Ida</label>
    <div class="col-sm-10">
    <input required name="price_one_way" id="price_one_way" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio Vuelta</label>
    <div class="col-sm-10">
    <input required name="price_round_trip" id="price_round_trip" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Número de Asiento</label>
    <div class="col-sm-10">
    <input required name="seat_number" id="seat_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo Transporte</label>
    <div class="col-sm-10">
    <select id="transport_type" name="transport_type" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione su Tipo de Transporte -- </option>
         <option value="Terrestre">Terrestre</option>
         <option value="Aéreo">Aéreo</option>
         <option value="Marino">Marino</option>
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input name="transport_email" id="transport_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
    <input name="transport_phone" id="transport_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-10">
    <div class="form-floating">
    <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
       <option > -- Seleccione su ciudad -- </option>

       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach

       </select>
</div>
    </div>
  </div>

   <a href="/transports" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop