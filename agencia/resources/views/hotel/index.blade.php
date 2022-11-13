@extends('adminlte::page')

@section('title', 'Hotel')

@section('content_header')
    <h1>Hoteles</h1>
@stop

@section('content')

<a href="hotels/create" class="btn btn-primary">Agregar Hotel</a>
<br></br>
<table id="hotels" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nombre Hotel</th>
        <th scope='col'>Número Cuartos</th>
        <th scope='col'>Precio por Noche</th>
        <th scope='col'>Email</th>
        <th scope='col'>Teléfono</th>
        <th scope='col'>Tipo de Cuarto</th>
        <th scope='col'>Ciudad</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead> 
<tbody>
    @foreach($hotels as $hotel)
    <tr>
        <td> {{$hotel->id}} </td>
        <td> {{$hotel->hotel_name}} </td>
        <td> {{$hotel->room_number}} </td>
        <td> {{$hotel->price_per_night}} </td>
        <td> {{$hotel->hotel_email}} </td>
        <td> {{$hotel->hotel_phone}} </td>
        <td> {{$hotel->room_types}} </td>
    
        <td> 

        {{$hotel->city->city_name}}

        </td>

        <td> 
            <form action="{{ route('hotels.destroy', $hotel->id)}} " method="POST">
                <a href="hotels/{{$hotel->id}}/edit" class="btn btn-info">Editar</a> 
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
    $('#hotels').DataTable({
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