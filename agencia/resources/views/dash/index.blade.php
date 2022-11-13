@extends('adminlte::page')

@section('title', 'Cuenta')

@section('content_header')
<h1></h1>
@stop

@section('content')
@can('user')
<div class="card w-80">
    <div class="card-body">
        <h1 class="h2">Bienvenido {{ Auth::user()->name }}</h1>
        <p class="card-text">Para volver a la página principal, selecciona el botón.</p>
        <a href="/" class="btn btn-primary">Volver a la Página Principal</a>
    </div>
</div>
@endcan

@can('package.create')
<div class="card w-80">
    <div class="card-body">
        <h1 class="h2">Bienvenido {{ Auth::user()->name }}</h1>
        <p class="card-text">Haz Ingresado como Administrador</p>

        <a href="/" class="btn btn-primary">Volver a la Página Principal</a>
    </div>
</div>

<div class="row">
    <div class="col-lg col-5">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ App\Models\City::count() }}</h3>
                <p>Ciudades</p>
            </div>
            <div class="icon">
                <i class="fas fa-map-marker"></i>
            </div>
            <a href="/cities" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg col-5">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ Auth::user()->count()  }}
                </h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="/users" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg col-5">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ App\Models\Hotel::count() }}</h3>
                <p>Hoteles</p>
            </div>
            <div class="icon">
                <i class="fas fa-hotel"></i>
            </div>
            <a href="/hotels" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg col-5">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ App\Models\Transport::count() }}</h3>
                <p>Transportes</p>
            </div>
            <div class="icon">
                <i class="fas fa-bus"></i>
            </div>
            <a href="/transports" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg col-5">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ App\Models\Guide::count() }}</h3>
                <p>Guías</p>
            </div>
            <div class="icon">
                <i class="fas fa-walking"></i>
            </div>
            <a href="/guides" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

<!-- <br><button class="btn btn-primary" onclick="downloadPDF()">Descargar PDF</button><br><br> -->

<p class="h2">Gráficos</p>
<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <p class="h3">Paquetes por mes</p>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col">
            <div>
                <p class="h3">Usuarios que más compran</p>
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <div>
                <p class="h3">Ciudades más Visitadas</p>
                <canvas id="myChart3"></canvas>
            </div>
        </div>
        <div class="col">
            <div>
             <p class="h3">Paquetes pagados por mes</p>
                <canvas id="myChart4"></canvas>
            </div>
        </div>
    </div>
</div>



@endcan


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<?php

  $con = new mysqli('localhost','root','','agencia03');
 
  //Creación de Paquetes por mes 
  $query = $con->query("
  SELECT DATE_FORMAT(created_at, '%M', 'es_ES') as Month, count(*) as numRecords from packages GROUP BY MonthName(created_at)ORDER BY MONTH(created_at)
  ");

  //Usuarios con mayor selección de Paquetes
  $query2= $con->query("
  SELECT packages.user_id, users.email as Usuario, COUNT(*) as numPackages FROM packages INNER JOIN users on packages.user_id = users.id GROUP BY user_id;");

  //Ciudades Destino más visitadas
  $query3 = $con->query("
  SELECT packages.to, cities.city_name as Ciudad, COUNT(*) as numPackages FROM packages INNER JOIN cities on packages.to = cities.id GROUP BY packages.to;");

   //Ganancias por Mes
   $query4 = $con->query("
   SELECT SUM(subtotal) as Total, DATE_FORMAT(created_at, '%M', 'es_ES') as Month, count(*) as numRecords from packages where packages.status = 'Pagado' GROUP BY MonthName(created_at)ORDER BY MONTH(created_at)"
);
 

  foreach($query as $data){
    $month[] = $data['Month'];
    $amount[] = $data['numRecords'];
  }

  foreach($query2 as $data2){
    $user[] = $data2['Usuario'];
    $amountPackages[] = $data2['numPackages'];
  }

  foreach($query3 as $data3){
    $city[] = $data3['Ciudad'];
    $amountPackages2[] = $data3['numPackages'];
  }

  foreach($query4 as $data4){
    $month2[] = $data4['Month'];
    $amountPackages3[] = $data4['Total'];
  }
?>
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Primer Gráfico -->
<script>
const labels = <?php  echo json_encode($month)?>;
const data = {
    labels: labels,
    datasets: [{
        label: 'Año 2022',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: <?php echo json_encode($amount)?>,
    }]
};
const config = {
    type: 'line',
    data: data,
    
    options: {}
};
</script>

<script>
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>

<!-- Segundo Gráfico -->
<script>
const labels2 = <?php  echo json_encode($user)?>;
const data2 = {
    labels: labels2,
    datasets: [{
        label: 'Usuarios',
        data: <?php  echo json_encode($amountPackages)?>,
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ],
        borderWidth: 1
    }]
};
const config2 = {
    type: 'bar',
    data: data2,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
};
</script>

<script>
const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
);
</script>

<!-- Tercer Gráfico -->

<script>
const data3 = {
    labels: <?php  echo json_encode($city)?>,
    datasets: [{
        label: 'My First Dataset',
        data: <?php  echo json_encode($amountPackages2)?>,
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)', 'rgba(255, 99, 132)',
            'rgba(255, 159, 64)',
            'rgba(255, 205, 86)',
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(153, 102, 255)',
            'rgba(201, 203, 207)'
        ],
        hoverOffset: 4
    }]
};

const config3 = {
    type: 'pie',
    data: data3,
};
</script>
<script>
const myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
);
</script>

<!-- Cuarto Gráfico -->

<script>
const labels4 = <?php  echo json_encode($month2)?>;
const data4 = {
    labels: labels4,
    datasets: [{
        label: 'Año 2022',
        backgroundColor: 'rgba(54, 162, 235)',
        borderColor: 'rgb(255, 99, 132)',
        data: <?php echo json_encode($amountPackages3)?>,
    }]
};
const config4 = {
    type: 'bar',
    data: data4,
    options: {}
};
</script>


<script>
const myChart4 = new Chart(
    document.getElementById('myChart4'),
    config4
);
</script>

<script>

window.jsPDF = window.jspdf.jsPDF;

function downloadPDF(){
const canvas = document.getElementById("myChart");
const canvas2 = document.getElementById("myChart2");
const canvas3 = document.getElementById("myChart3");
const canvas4 = document.getElementById("myChart4");
const canvasImage = canvas.toDataURL("image/jpeg",1.0);
const canvasImage2 = canvas3.toDataURL("image2/jpeg",1.0);
const canvasImage3 = canvas4.toDataURL("image3/jpeg",1.0);
const canvasImage4 = canvas4.toDataURL("image4/jpeg",1.0);
console.log(canvasImage);

let pdf = new jsPDF('landscape');
pdf.setFontSize(20);
pdf.addImage(canvasImage, 'PNG',15,15,270,150);

pdf.text(15,15,"MI");
pdf.save('reportes.pdf');

};

</script>
@stop