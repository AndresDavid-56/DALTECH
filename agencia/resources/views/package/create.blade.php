@extends('layouts.baselayout')

@section('contenido')
 <h2> Crear Paquete </h2>

 <form action="/packages" method="POST">
    @csrf
    <label for="exampleInputEmail1" class="form-label">Fecha Inicio</label>
    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input name="start_date" id="start_date" type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: "YYYY/MM/DD HH:MM:SS"
                });  
            });
        </script>
    </div>
    <label for="exampleInputEmail1" class="form-label">Fecha Salida</label>
    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input name="exit_date" id="exit_date" type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: "YYYY/MM/DD HH:MM:SS"
                });  
            });
        </script>
    </div>


<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Subtotal</span>
  <input name="subtotal" id="subtotal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Adultos</span>
  <input name="adults_number" id="adults_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Niños</span>
  <input name="children_number" id="children_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tercera Edad</span>
  <input name="elderly_number" id="elderly_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div>
        <select id="from" name="from" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione la Ciudad de Origen -- </option>  
        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach
        </select>
        </div>

        <div>
        <select id="to" name="to" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione la Ciudad de Destino -- </option>  
        @foreach ($cities as $citie)  
          <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
        @endforeach
        </select>
        </div>

        <div>
        <select id="guides_id" name="guides_id" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione el guía -- </option>  
        @foreach ($guides as $guide)  
          <option value="{{ $guide['id'] }}">{{$guide['guide_name']}}</option>
        @endforeach
        </select>
        </div>

        <div>
        <select id="transports_id" name="transports_id" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione el Transporte -- </option>  
        @foreach ($transports as $transport)  
          <option value="{{ $transport['id'] }}">{{$transport['description_transport']}}</option>
        @endforeach
        </select>
        </div>

        <div>
        <select id="hotels_id" name="hotels_id" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione el Hotel -- </option>  
        @foreach ($hotels as $hotel)  
          <option value="{{ $hotel['id'] }}">{{$hotel['hotel_name']}}</option>
        @endforeach
        </select>
        </div>

        <div>
        <select id="user_id" name="user_id" class="form-select" aria-label="Default select example">
        <option value=""> -- Seleccione el Usuario -- </option>  
        @foreach ($users as $user)  
          <option value="{{ $user['id'] }}">{{$user['email']}}</option>
        @endforeach
        </select>
        </div>


    <a href="/packages" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection