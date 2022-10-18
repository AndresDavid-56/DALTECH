@extends('adminlte::page')

@section('title', 'Guía')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Vista Index de Guía</h1>

<a href="guides/create" class="btn btn-primary">Agregar Guía</a>
<br></br>
<table id="guides" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nombre Guía</th>
        <th scope='col'>Precio Día</th>
        <th scope='col'>Disponible</th>
        <th scope='col'>Teléfono</th>
        <th scope='col'>Correo</th>
        <th scope='col'>Ciudad</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead> 
<tbody>
    @foreach($guides as $guide)
    <tr>
        <td> {{$guide->id}} </td>
        <td> {{$guide->guide_name}} </td>
        <td> {{$guide->price_per_day}} </td>
        <td> {{$guide->guide_available}} </td>
        <td> {{$guide->guide_phone}} </td>
        <td> {{$guide->guide_email}} </td>
        
        <td> {{$guide->city_id}} </td>

        <td> 
            <form action="{{ route('guides.destroy', $guide->id)}} " method="POST">
                <a href="guides/{{$guide->id}}/edit" class="btn btn-info">Editar</a> 
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
    $('#guides').DataTable();
} );
</script>
@stop