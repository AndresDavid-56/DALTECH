@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
<a href="users/create" class="btn btn-primary">Agregar Usuario</a>
<br></br>
<table id="users" class="table table--striped table-bordered shadow-lg mt-4" >
<thead class="bg-primary text-white">
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nombre</th>
        <th scope='col'>Apellido</th>
        <th scope='col'>Teléfono</th>
        <th scope='col'>Email</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead> 
<tbody>
    @foreach($users as $user)
    <tr>
        <td> {{$user->id}} </td>
        <td> {{$user->name}} </td>
        <td> {{$user->last_name}} </td>
        <td> {{$user->phone}} </td>
        <td> {{$user->email}} </td>        

        <td> 
            <form action="{{ route('users.destroy', $user->id)}} " method="POST">
                <a href="users/{{$user->id}}/edit" class="btn btn-info">Editar</a> 
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
    $('#users').DataTable();
} );
</script>
@stop