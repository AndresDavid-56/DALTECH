@extends('layouts.baselayout')

@section('contenido')
    <h1>Vista Index de Guía</h1>

    <a href="guides/create" class="btn btn-primary">Agregar Guía</a>

    <table class="table table-hover">
    <thead>
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
@endsection