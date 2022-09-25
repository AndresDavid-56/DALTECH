@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Ciudad</h1>

    <a href="cities/create" class="btn btn-primary">Agregar Ciudad</a>

    <table class="table table-hover">
    <thead>
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
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>                
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection