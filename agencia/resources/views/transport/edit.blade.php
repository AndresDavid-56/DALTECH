@extends('adminlte::page')

@section('title', 'Editar Transporte')

@section('content_header')
    <h1>Editar Transporte</h1>
@stop

@section('content')
<form action="/transports/{{$transport->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
    <input value="{{$transport->description_transport}}" name="description_transport" id="description_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Capacidad</label>
    <div class="col-sm-10">
    <input value="{{$transport->capacity_transport}}" name="capacity_transport" id="capacity_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio Ida</label>
    <div class="col-sm-10">
    <input value="{{$transport->price_one_way}}" name="price_one_way" id="price_one_way" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio Vuelta</label>
    <div class="col-sm-10">
    <input value="{{$transport->price_round_trip}}" name="price_round_trip" id="price_round_trip" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Número de Asiento</label>
    <div class="col-sm-10">
    <input value="{{$transport->seat_number}}" name="seat_number" id="seat_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo Transporte</label>
    <div class="col-sm-10">
    <select id="transport_type" name="transport_type" class="form-select" aria-label="Default select example">
        <option value="{{$transport->transport_type}}"> -- Seleccione su Tipo de Transporte -- </option>
          <option value="Terrestre">Terrestre</option>
          <option value="Aéreo">Aéreo</option>
          <option value="Marino">Marino</option>
        </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input value="{{$transport->transport_email}}" name="transport_email" id="transport_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
    <input value="{{$transport->transport_phone}}" name="transport_phone" id="transport_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-10">
    <div class="form-floating">
    <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
        <option value="{{$transport->city_id}}"> -- Seleccione su ciudad -- </option>

        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach

        </select>
</div>
    </div>
  </div>


    <a href="/transports" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop