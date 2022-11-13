@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1>Ciudades</h1>
@stop

@section('content')
<a href="cities/create" class="btn btn-primary">Agregar Ciudad</a>
<br></br>

<table id="cities" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nombre Ciudad</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead> 
<tbody>
    @foreach($cities as $city)
    <tr>
        <td> {{$city->id}} </td>
        <td> {{$city->city_name}} </td>
        <td> 
            <form action="{{ route('cities.destroy', $city->id)}} " method="POST">
                <a href="cities/{{$city->id}}/edit" class="btn btn-info">Editar</a> 
                @csrf
            </form>                
        </td>
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
<script>
    $(document).ready( function () {
    $('#cities').DataTable({
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
</script>
@stop