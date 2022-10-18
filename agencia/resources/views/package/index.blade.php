@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Vista Index de Paquete</h1>
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
        <th scope='col'>Número Adultos</th>
        <th scope='col'>Número Niños</th>
        <th scope='col'>Número Tercera Edad</th>
        <th scope='col'>Ciudad Origen</th>
        <th scope='col'>Ciudad Destino</th>
        <th scope='col'>Transporte ID</th>
        <th scope='col'>Guía ID</th>
        <th scope='col'>Hotel ID</th>
        <th scope='col'>Usuario ID</th>
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
        <td> {{$package->from}} </td>
        <td> {{$package->to}} </td>
        <td> {{$package->transports_id}} </td>
        <td> {{$package->guides_id}} </td>
        <td> {{$package->hotels_id}} </td>            
        <td> {{$package->user_id}} </td>
        
        @can('package.create')
        <td> 
            <form action="{{ route('packages.destroy', $package->id)}} " method="POST">
                <a href="packages/{{$package->id}}/edit" class="btn btn-info">Editar</a> 
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
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
<script>
    $(document).ready( function () {
    $('#packages').DataTable();
} );
</script>
@stop