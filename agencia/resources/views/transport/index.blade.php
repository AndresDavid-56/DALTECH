@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Transporte</h1>

    <a href="transports/create" class="btn btn-primary">Agregar Transporte</a>

    <table class="table table-hover">
    <thead>
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
@endsection