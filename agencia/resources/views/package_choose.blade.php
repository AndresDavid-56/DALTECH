<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Paquete</title>

	<link type="text/css" rel="stylesheet" href="{{ '/css2/bootstrap.min.css' }}" />
	<link type="text/css" rel="stylesheet" href="{{ '/css2/style.css' }}" />
	<script>
<?php
						$con = new mysqli('localhost','root','','agencia03');
						$query = $con->query("
						SELECT cities.id from cities WHERE cities.city_name = '{$_GET['ciudad']}' ");
						foreach($query as $data){
							$month[] = $data['id'];
						  }
?>
console.log();

						</script>

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Arma tu Paquete de Viaje</h1>
						</div>
					</div>
					<?php
								$globarl = 100;
								$global = rand(100, 500);
								?>
								<script>
  $global = 0;
  console.log("El precio está en "+ $global)
</script>
<script>
									function total() {
											
										$global = $global * 2 + $global * 1.2 + $global * 1.1;
											console.log($global);
											console.log({{ Auth::user()->id }});
										}
									</script> 
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							 <form action="/packages" method="POST">
							 @csrf
							 <input type='hidden' id='subtotal' name='subtotal' 
     						value="<?php echo $global; ?>"/>

							 <input type='hidden' id='user_id' name='user_id' 
     						value=" {{ Auth::user()->id }}"/>


								<div class="form-group">
									<div class="form-checkbox">
										<label for="roundtrip">
											<input type="radio" id="roundtrip" name="flight-type">
											<span></span>Ida y Vuelta
										</label>
										<label for="one-way">
											<input type="radio" id="one-way" name="flight-type">
											<span></span>Solo Ida
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Ciudad Origen</span>
										
											<select id="from" name="from"  class="form-control">
											@foreach ($cities as $citie)
									         <option value="{{ $citie['id'] }}">{{$citie['city_name']}}</option>
       										@endforeach
											</select>
											<span class="select-arrow"></span>
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Ciudad Destino</span>
											<input class="form-control" id="" name="" disabled=»disabled» type="text" value="{{ $v1 = $_GET['ciudad'] }}" placeholder="Ciudad"></input>
											<input type='hidden' id='to' name='to' value="<?php  echo $month[0] ?>"/>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Fecha Inicio</span>
											<input class="form-control" id="fromDate"  name="start_date" id="datetimepicker" type="date" required min="<?php $fecha = date('Y-m-d');echo $fecha;?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Fecha Salida</span>
											<input class="form-control" id="toDate" name="exit_date" id="datetimepicker"  type="date" required min="<?php $fecha = date('Y-m-d'); echo $fecha;?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Adultos (18-60)</span>
											<select name="adults_number" id="adults_number" class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Niños (0-17)</span>
											<select name="children_number" id="children_number" class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Tercera Edad (60+)</span>
											<select name="elderly_number" id="elderly_number" class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Transporte</span>
											<select  id="transports_id" name="transports_id" class="form-control">
											<option value=""> -- Primero seleccione su Destino -- </option>
       										</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<input type='hidden' id='status' name='status' value="Pendiente"/>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Hotel</span>
											<select name="hotels_id" id="hotels_id" class="form-control">
											<option value=""> -- Primero seleccione su Destino -- </option>
       										</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">¿ Desea Guía ?</span>
											<select name="guides_id" id="guides_id" class="form-control">
											
											<option value="4">Sí</option>
											<option value="2">No</option>
       										
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									
								</div>
								<div value="col-md-4">
								
									<button href="" class="submit-btn">Continuar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

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
    
console.log(destino.value);
console.log(origen.value);

origen.addEventListener("change", function(){
	if(origen.value == destino.value){
	  origen.value=null;
	  alert("Ciudad de Origen igual a la de Destino !");
	}
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
 $(document).ready(function () {
		  //Transporte
		  $('#to').ready(function () {
			  var idCity = <?php  echo $month[0] ?>;
			  console.log('sa> '  + idCity);
			  console.log(<?php  echo $month[0] ?>);
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
							  $global = $global + 80;
					  });
				  }
			  });
		  });

		  //Hotel
		  $('#to').ready(function () {
			  var idCity = <?php  echo $month[0] ?>;
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
							  $global = $global + 80;
					  });
				  }
			  });
		  });

		  	
});


</script>



</html>