@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Hotel</h1>

    <a href="hotels/create" class="btn btn-primary">Agregar Hotel</a>

    <table class="table table-hover">
    <thead>
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
            
            <td> {{$hotel->city_id}} </td>

            <td> 
                <form action="{{ route('hotels.destroy', $hotel->id)}} " method="POST">
                    <a href="hotels/{{$hotel->id}}/edit" class="btn btn-info">Editar</a> 
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