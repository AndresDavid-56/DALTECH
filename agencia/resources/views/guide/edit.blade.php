@extends('layouts.baselayout')

@section('contenido')
 <h2> Editar Guía </h2>

 <form action="/guides/{{$guide->id}}" method="POST">
    @csrf
    @method('PUT')
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nombre Guía</span>
  <input value="{{$guide->guide_name}}" name="guide_name" id="guide_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Precio por Día</span>
  <input value="{{$guide->price_per_day}}" name="price_per_day" id="price_per_day" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input value="{{$guide->guide_email}}" name="guide_email" id="guide_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
  <input value="{{$guide->guide_phone}}" name="guide_phone" id="guide_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
<select id="guide_available" name="guide_available" class="form-select" aria-label="Default select example">
        <option value="{{$guide->guide_available}}"> -- Seleccione su Disponibilidad -- </option>
          <option value="Disponible">Disponible</option>
          <option value="No Disponible" >No Disponible</option>
        </select>
</div>
        <div>
        <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
        <option value="{{$guide->city_id}}"> -- Seleccione su ciudad -- </option>

        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach

        </select>
        </div>

    <a href="/guides" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection