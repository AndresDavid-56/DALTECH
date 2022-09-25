@extends('layouts.baselayout')

@section('contenido')
 <h2> Crear Hotel </h2>

 <form action="/hotels" method="POST">
    @csrf
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nombre Hotel</span>
  <input name="hotel_name" id="hotel_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Número Cuartos</span>
  <input name="room_number" id="room_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Precio por noche</span>
  <input name="price_per_night" id="price_per_night" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input name="hotel_email" id="hotel_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
  <input name="hotel_phone" id="hotel_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tipo de Cuarto</span>
  <input name="room_types" id="room_types" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div>
        <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione la Ciudad -- </option>  
        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach
        </select>
        </div>

    <a href="/hotels" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection