@extends('adminlte::page')

@section('title', 'Paquetes')

@section('content_header')
    <h1>Crear Paquete</h1>
@stop

@section('content')
<?php
$globarl = 100;
$global = 110;
?>
<form action="/packages" method="POST" autocomplete="on">
@csrf
<script>
  $global = 0;
  console.log("El precio está en "+ $global)
</script>
   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de Inicio</label>
    <div class="col-sm-10">
    <input class="" type="date" id="fromDate" name="start_date"
       value=""
       min="<?php $fecha = date('Y-m-d');
       echo $fecha;?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de Regreso</label>
    <div class="col-sm-10">
    <input class="" type="date" id="toDate" name="exit_date"
       value=""
       min="<?php $fecha = date('Y-m-d');
       echo $fecha;?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
    <input disabled value="El Campo se generará automaticamente" alpha type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <script>
     function total() {
            $global = $global * 2 + $global * 1.2 + $global * 1.1;
            console.log($global);
          }
    </script> 
    <input type='hidden' id='subtotal' name='subtotal' 
     value="<?php echo $globarl = $global; ?>"/>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Adultos</label>
    <div class="col-sm-10">
    <input name="adults_number" id="adults_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Niños</label>
    <div class="col-sm-10">
    <input name="children_number" id="children_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tercera Edad</label>
    <div class="col-sm-10">
    <input name="elderly_number" id="elderly_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad Origen</label>
    <div class="col-sm-10">
    <select id="from" name="from" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione la Ciudad de Origen -- </option>  
       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad Destino</label>
    <div class="col-sm-10">
    <select id="to" name="to" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione la Ciudad de Destino -- </option>  
       @foreach ($cities as $citie)  
         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       @endforeach
       </select>
    </div>
  </div>


  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Guía</label>
    <div class="col-sm-10">
    <select onchange="myFunction()" id="guides_id" name="guides_id" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione el guía -- </option>  
       @foreach ($guides as $guide)  
         <option  value="{{ $guide['id'] }}">{{$guide['guide_name']}}</option>

      <script>
          function myFunction() {
            console.log({{$guide['price_per_day']}});
            $globarl = $global + {{$guide['price_per_day']}}
            $global = $global + {{$guide['price_per_day']}}
            console.log($global);
          }
      </script>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Transporte</label>
    <div class="col-sm-10">
    <select onchange="myFunction2()" id="transports_id" name="transports_id" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione el Transporte -- </option>  
       @foreach ($transports as $transport)  
         <option value="{{ $transport['id'] }}">{{$transport['description_transport']}}</option>
         <script>
          function myFunction2() {
            console.log({{$transport['price_one_way']}});
            $globarl =  $global + {{$transport['price_one_way']}}
            $global = $global + {{$transport['price_one_way']}}
            console.log($global);
          }
      </script>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Hotel</label>
    <div class="col-sm-10">
    <select onchange="myFunction3()"  id="hotels_id" name="hotels_id" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione el Hotel -- </option>  
       @foreach ($hotels as $hotel)  
         <option value="{{ $hotel['id'] }}">{{$hotel['hotel_name']}}</option>
         <script>
          function myFunction3() {
            console.log({{$hotel['price_per_night']}});
            $globarl = $global + {{$hotel['price_per_night']}}
            $global = $global + {{$hotel['price_per_night']}}
            console.log($global);
          }
      </script>
       @endforeach
       </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <select id="user_id" name="user_id" class="form-select" aria-label="Default select example">
       <option value=""> -- Seleccione el Usuario -- </option>  
       @foreach ($users as $user)  
         <option value="{{ $user['id'] }}">{{$user['email']}}</option>
         
       @endforeach
       </select>
    </div>
  </div>

   <a href="/packages" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button onchange="total()" type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
        
           $(function () {
               $('#datetimepicker').datetimepicker({
                   format: "YYYY/MM/DD HH:MM:SS"
               });  
           });
       </script>
        <script type="text/javascript">
           var fromDate;
           $('#fromDate').on('change',function(){
            fromDate = $(this).val();
            $('#toDate').prop('min',function(){
              return fromDate;
            })
           })
           var toDate;
           $('#toDate').on('change',function(){
            toDate = $(this).val();
            $('#fromDate').prop('max',function(){
              return toDate;
            })
           })
       </script>

  <script>

    var origen = document.getElementById("from");
    var destino = document.getElementById("to");

    destino.addEventListener("change", function(){
        if(origen.value == destino.value){
          destino.value=null;
          alert("Ciudad de Origen igual a la de Destino !");
        }
    });

    origen.addEventListener("change", function(){
        if(origen.value == destino.value){
          origen.value=null;
          alert("Ciudad de Origen igual a la de Destino !");
        }
    });
  </script>

@stop