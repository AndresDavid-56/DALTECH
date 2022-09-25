@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Paquete</h1>

    <a href="packages/create" class="btn btn-primary">Agregar Paquete</a>

    <table class="table table-hover">
    <thead>
        <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Fecha Inicio</th>
            <th scope='col'>Fecha Fin</th>
            <th scope='col'>SubTotal</th>
            <th scope='col'>Número Adultos</th>
            <th scope='col'>Número Niños</th>
            <th scope='col'>Número Personas Tercera Edad</th>
            <th scope='col'>Ciudad Origen</th>
            <th scope='col'>Ciudad Destino</th>
            <th scope='col'>Transporte ID</th>
            <th scope='col'>Guía ID</th>
            <th scope='col'>Hotel ID</th>
            <th scope='col'>Usuario ID</th>
            <th scope='col'>Acciones</th>
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

            <td> 
                <form action="{{ route('packages.destroy', $package->id)}} " method="POST">
                    <a href="packages/{{$package->id}}/edit" class="btn btn-info">Editar</a> 
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