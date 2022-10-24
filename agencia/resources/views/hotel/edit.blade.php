@extends('adminlte::page')

@section('title', 'Hotel')

@section('content_header')
    <h1>Editar Hotel</h1>
@stop

@section('content')

<form action="/hotels/{{$hotel->id}}" method="POST">
   @csrf
   @method('PUT')

   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre Hotel</label>
    <div class="col-sm-10">
    <input value="{{$hotel->hotel_name}}" name="hotel_name" id="hotel_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Número de Cuartos</label>
    <div class="col-sm-10">
    <input value="{{$hotel->room_number}}" name="room_number" id="room_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio por Noche</label>
    <div class="col-sm-10">
    <input value="{{$hotel->price_per_night}}" name="price_per_night" id="price_per_night" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input value="{{$hotel->hotel_email}}" name="hotel_email" id="hotel_email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
    <input value="{{$hotel->hotel_phone}}" name="hotel_phone" id="hotel_phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de Cuarto</label>
    <div class="col-sm-10">
    <input value="{{$hotel->room_types}}" name="room_types" id="room_types" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-10">
    <div>
    <select id="city_id" name="city_id" class="form-select" aria-label="Default select example">
       <option value="{{$hotel->city_id}}"> -- Seleccione su ciudad -- </option>

       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach

       </select>
    </div>
    </div>
  </div>

   <a href="/hotels" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary">Editar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop