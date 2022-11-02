@extends('adminlte::page')

@section('title', 'Paquetes')

@section('content_header')
    <h1>Paquetes</h1>
@stop

@section('content')


    @can('package.create')
    <a href="packages/create" class="btn btn-primary">Agregar Paquete</a>
    @endcan
<br></br>
<table id="packages" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Fecha Inicio</th>
        <th scope='col'>Fecha Fin</th>
        <th scope='col'>SubTotal</th>
        <th scope='col'>Adultos</th>
        <th scope='col'>Niños</th>
        <th scope='col'>Tercera Edad</th>
        <th scope='col'>Ciudad Origen</th>
        <th scope='col'>Ciudad Destino</th>
        <th scope='col'>Transporte</th>
        <th scope='col'>Guía</th>
        <th scope='col'>Hotel</th>
        <th scope='col'>Usuario</th>
        <th scope='col'>ID</th>
        @can('package.create')
        <th scope='col'>Acciones</th>
        @endcan
        
    </tr>
</thead> 
<tbody>
    @foreach($packages as $package)
    <tr>
        <td> {{$package->id}} </td>
        <td> {{$package->start_date}} </td>
        <td> {{$package->exit_date}} </td>
        <td> {{$package->subtotal}} </td>
        <td> {{$package->adults_number}} </td>
        <td> {{$package->children_number}} </td>
        <td> {{$package->elderly_number}} </td>
        <td> {{$package->city->city_name}} </td>
        <td> {{$package->city2->city_name}} </td>
        <td> {{$package->transport->description_transport}} </td>
        <td> {{$package->guide->guide_name}} </td>
        <td> {{$package->hotel->hotel_name}} </td>            
        <td> {{$package->user->email}} </td>
        <td> {{$package->user_id}} </td>
        
        @can('package.create')
        <td> 
            <form action="{{ route('packages.destroy', $package->id)}} " method="POST">
                <a href="packages/{{$package->id}}/edit" class="btn btn-info">Editar</a> 
                @csrf
               
            </form>                
        </td>
        @endcan
        
    </tr>
    @endforeach
</tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop

@section('js')

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"></script>
    <script>

        $(document).ready( function () {
            console.log({{auth()->id()}});
            $('#packages').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostar _MENU_ registros por página",
            "zeroRecords": "Sin Registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registro Disponible",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar: ",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        
    });
} );


        @can('user')
        $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
            var min = {{auth()->id()}} ;
            var max = {{auth()->id()}} ;
            var age = parseFloat(data[13]) || 0; // use data for the age column
            if (
                (isNaN(min) && isNaN(max)) ||
                (isNaN(min) && age <= max) ||
                (min <= age && isNaN(max)) ||
                (min <= age && age <= max)
            ) {
                return true;
            }
            return false;
        });

        $({{auth()->id()}}, {{auth()->id()}}).keyup(function () {
        table.draw();
        });
        @endcan
      
    </script>

    @can('package.create')
    <script>

    </script>
    @endcan

@stop