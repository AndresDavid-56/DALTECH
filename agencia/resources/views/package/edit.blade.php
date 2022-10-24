@extends('adminlte::page')

@section('title', 'Paquetes')

@section('content_header')
    <h1>Editar Paquete</h1>
@stop

@section('content')

<form action="/packages/{{$package->id}}" method="POST">
   @csrf
   @method('PUT')
   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Inicio</label>
    <div class="col-sm-10">
    
    <input type="date" id="datetimepicker" name="start_date"
       value="{{$package->start_date}}"
       min="2022-10-01">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Salida</label>
    <div class="col-sm-10">
    <input type="date" id="datetimepicker" name="exit_date"
        value="{{$package->exit_date}}"
       min="2022-10-01">
    </div>
  </div> 

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
    <input value="{{$package->subtotal}}" name="subtotal" id="subtotal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Adultos</label>
    <div class="col-sm-10">
    <input  value="{{$package->adults_number}}"   name="adults_number" id="adults_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Niños</label>
    <div class="col-sm-10">
    <input value="{{$package->children_number}}" name="children_number" id="children_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tercera Edad</label>
    <div class="col-sm-10">
    <input value="{{$package->elderly_number}}" name="elderly_number" id="elderly_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad Origen</label>
    <div class="col-sm-10">
    <select value="{{$package->from}}" id="from" name="from" class="form-select" aria-label="Default select example">
       <option value="" > -- Seleccione la Ciudad de Origen -- </option>  
       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad Destino</label>
    <div class="col-sm-10">
    <select value="{{$package->to}}" id="to" name="to" class="form-select" aria-label="Default select example">
       <option value="{{$package->to}}"> -- Seleccione la Ciudad de Destino -- </option>  
       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Guía</label>
    <div class="col-sm-10">
    <select value="{{$package->guides_id}}" id="guides_id" name="guides_id" class="form-select" aria-label="Default select example">
       <option value="{{$package->guides_id}}"> -- Seleccione el guía -- </option>  
       @foreach ($guides as $guide)  
         <option value="{{ $guide['id'] }}">{{$guide['guide_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Transporte</label>
    <div class="col-sm-10">
    <select value="{{$package->transports_id}}" id="transports_id" name="transports_id" class="form-select" aria-label="Default select example">
       <option value="{{$package->transports_id}}" > -- Seleccione el Transporte -- </option>  
       @foreach ($transports as $transport)  
         <option value="{{ $transport['id'] }}">{{$transport['description_transport']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Hotel</label>
    <div class="col-sm-10">
    <select value="{{$package->hotels_id}}" id="hotels_id" name="hotels_id" class="form-select" aria-label="Default select example">
       <option value="{{$package->hotels_id}}" > -- Seleccione el Hotel -- </option>  
       @foreach ($hotels as $hotel)  
         <option value="{{ $hotel['id'] }}">{{$hotel['hotel_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <select value="{{$package->user_id}}" id="user_id" name="user_id" class="form-select" aria-label="Default select example">
        <option> -- Seleccione el Usuario -- </option>  
       @foreach ($users as $user)  
         <option value="{{ $user['id'] }}">{{$user['email']}}</option>
       @endforeach
       </select>
    </div>
  </div>

   <a href="/packages" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop