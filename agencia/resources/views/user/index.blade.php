@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Usuarios</h1>

    <a href="users/create" class="btn btn-primary">Agregar Usuario</a>

    <table class="table table-hover">
    <thead>
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
@endsection