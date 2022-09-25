@extends('layouts.baselayout')

@section('contenido')
 <h2> Editar Transporte </h2>

 <form action="/transports/{{$transport->id}}" method="POST">
    @csrf
    @method('PUT')
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
  <input value="{{$transport->description_transport}}" name="description_transport" id="description_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Capacidad</span>
  <input value="{{$transport->capacity_transport}}" name="capacity_transport" id="capacity_transport" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Precio de Ida</span>
  <input value="{{$transport->price_one_way}}" name="price_one_way" id="price_one_way" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Precio de Vuelta</span>
  <input value="{{$transport->price_round_trip}}" name="price_round_trip" id="price_round_trip" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Número de Asiento</span>
  <input value="{{$transport->seat_number}}" name="seat_number" id="seat_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
<select id="transport_type" name="transport_type" class="form-select" aria-label="Default select example">
        <option value="{{$transport->transport_type}}"> -- Seleccione su Tipo de Transporte -- </option>
          <option value="Terrestre">Terrestre</option>
          <option value="Aéreo">Aéreo</option>
          <option value="Marino">Marino</option>
        </select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input value="{{$transport->transport_email}}" name="transport_email" id="transport_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
  <input value="{{$transport->transport_phone}}" name="transport_phone" id="transport_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div>
        <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
        <option value="{{$transport->city_id}}"> -- Seleccione su ciudad -- </option>

        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach

        </select>
        </div>

    <a href="/transports" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection