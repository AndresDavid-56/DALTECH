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
    <input class="" type="date" required id="fromDate" name="start_date"
       value=""
       min="<?php $fecha = date('Y-m-d');
       echo $fecha;?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de Regreso</label>
    <div class="col-sm-10">
    <input class="" type="date" required id="toDate" name="exit_date"
       value=""
       min="<?php $fecha = date('Y-m-d');
       echo $fecha;?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
    <input disabled  value="El Campo se generará automaticamente" alpha type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <script>
     function total() {
            $global = $global * 2 + $global * 1.2 + $global * 1.1;
            console.log($global);
          }
    </script> 
    <input type='hidden' id='subtotal' name='subtotal' 
     value="<?php echo $globarl = $global * rand(1, 6); ?>"/>

     <input type='hidden' id='status' name='status' 
     value="Pendiente"/>

    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Adultos</label>
    <div class="col-sm-10">
    <input name="adults_number" required id="adults_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Niños</label>
    <div class="col-sm-10">
    <input name="children_number" required id="children_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tercera Edad</label>
    <div class="col-sm-10">
    <input name="elderly_number" required id="elderly_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
    <select id="guides_id" name="guides_id" class="form-select" aria-label="Default select example">
      <option value=""> -- Primero seleccione su Destino -- </option>
      </select>

    </div>
  </div>
  

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Transporte</label>
    <div class="col-sm-10">
    <select id="transports_id" name="transports_id" class="form-select" aria-label="Default select example">
      <option value=""> -- Primero seleccione su Destino -- </option>
       </select>
    </div>
  </div>


  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Hotel</label>
    <div class="col-sm-10">
    <select id="hotels_id" name="hotels_id" class="form-select" aria-label="Default select example">
    <option value=""> -- Primero seleccione su Destino -- </option>
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
            console.log("El precio está en "+ $global)
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
   $(document).ready(function () {
      //Guia
            $('#to').on('change', function () {
                var idCity = this.value;
                console.log('ds ' + idCity);
                $("#guides_id").html('');
                $.ajax({
                    url: "{{url('api/fetch-guide')}}",
                    type: "POST",
                    data: {
                        city_id: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#guides_id').html('<option value="">-- Seleccione su Guía --</option>');
                        $.each(result.guides, function (key, value) {
                            $("#guides_id").append('<option value="' + value
                                .id + '">' + value.guide_name + '</option>');
                                $global = $global + 70;
                                
                        });
                    }
                });
            });

            //Transporte
            $('#to').on('change', function () {
                var idCity = this.value;
                $("#transports_id").html('');
                $.ajax({
                    url: "{{url('api/fetch-transport')}}",
                    type: "POST",
                    data: {
                        city_id: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#transports_id').html('<option value="">-- Seleccione su Transporte --</option>');
                        $.each(result.transports, function (key, value) {
                            $("#transports_id").append('<option value="' + value
                                .id + '">' + value.description_transport + '</option>');
                                $global = $global + 70;
                        });
                    }
                });
            });

            //Hotel
            $('#to').on('change', function () {
                var idCity = this.value;
                $("#hotels_id").html('');
                $.ajax({
                    url: "{{url('api/fetch-hotel')}}",
                    type: "POST",
                    data: {
                        city_id: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#hotels_id').html('<option value="">-- Seleccione su Hotel --</option>');
                        $.each(result.hotels, function (key, value) {
                            $("#hotels_id").append('<option value="' + value
                                .id + '">' + value.hotel_name + '</option>');
                                console.log("guia " + $global);
                                $global = $global + 70;
                        });
                    }
                });
            });
     
  });


  </script>

  <!-- script>

Swal.fire({
  title: '¿ Desea Continuar ?',
  text: "",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Cancelar',
  confirmButtonText: 'Comprar Paquete'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Paquete Seleccionado!',
      'Realice el pago para finalizar.',
      'success'
    )
  }
})

  </script-- >
  
@stop