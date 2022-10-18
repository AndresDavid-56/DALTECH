<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Paquete</title>

	<link type="text/css" rel="stylesheet" href="{{ '/css2/bootstrap.min.css' }}" />
	<link type="text/css" rel="stylesheet" href="{{ '/css2/style.css' }}" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Selecciona tu Paquete de Viaje</h1>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<!-- <form action="/packages" method="POST"> -->
							<!-- @csrf -->
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
											<input class="form-control" id="to" name="to" disabled=»disabled» type="text" value="{{ $v1 = $_GET['ciudad'] }}" placeholder="Ciudad"></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Fecha Inicio</span>
											<input class="form-control" name="start_date" id="datetimepicker" type="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Fecha Salida</span>
											<input class="form-control" name="exit_date" id="datetimepicker"  type="date" required>
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
											<select name="transport" id="transport" class="form-control">
											@foreach ($transports as $transport)
									         <option value="{{ $transport['id'] }}">{{$transport['transport_type']}}</option>
       										@endforeach
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Hotel</span>
											<select name="hotel" id="hotel" class="form-control">
											@foreach ($hotels as $hotel)
									         <option value="{{ $hotel['id'] }}">{{$hotel['hotel_name']}}</option>
       										@endforeach
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">¿ Desea Guía ?</span>
											<select name="transport" id="transport" class="form-control">
											
											<option>Sí</option>
											<option>No</option>
       										
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									
								</div>
								<div value="col-md-4">
								
									<button href="city_choose" class="submit-btn">Continuar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
           $(function () {
               $('#datetimepicker').datetimepicker({
                   format: "YYYY/MM/DD HH:MM:SS"
               });  
           });
</script>

</html>