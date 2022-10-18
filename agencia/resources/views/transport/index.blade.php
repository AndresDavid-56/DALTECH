@extends('adminlte::page')

@section('title', 'Transporte')

@section('content_header')
    <h1>Transporte</h1>
@stop

@section('content')
<h1>Vista Index de Transporte</h1>

<a href="transports/create" class="btn btn-primary">Agregar Transporte</a>
<br></br>
<table id="transports" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Descripcion Transporte</th>
        <th scope='col'>Capacidad Transporte</th>
        <th scope='col'>Precio de Ida</th>
        <th scope='col'>Precio de Vuelta</th>
        <th scope='col'>Numero de Asiento</th>
        <th scope='col'>Tipo de Transporte</th>
        <th scope='col'>Email</th>
        <th scope='col'>Teléfono</th>
        <th scope='col'>Ciudad</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead> 
<tbody>
    @foreach($transports as $transport)
    <tr>
        <td> {{$transport->id}} </td>
        <td> {{$transport->description_transport}} </td>
        <td> {{$transport->capacity_transport}} </td>
        <td> {{$transport->price_one_way}} </td>
        <td> {{$transport->price_round_trip}} </td>
        <td> {{$transport->seat_number}} </td>
        <td> {{$transport->transport_type}} </td>
        <td> {{$transport->transport_email}} </td>
        <td> {{$transport->transport_phone}} </td>
        
        <td> {{$transport->city_id}} </td>

        <td> 
            <form action="{{ route('transports.destroy', $transport->id)}} " method="POST">
                <a href="transports/{{$transport->id}}/edit" class="btn btn-info">Editar</a> 
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
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
    $('#transports').DataTable();
} );
</script>
@stop