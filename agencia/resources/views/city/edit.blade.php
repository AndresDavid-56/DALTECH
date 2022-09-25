@extends('layouts.baselayout')

@section('contenido')
 <h2> Editar Ciudad </h2>

 <form action="/cities/{{$city->id}}" method="POST">
    @csrf
    @method('PUT')
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Ciudad</span>
  <input value="{{$city->city_name}}" name="city_name" id="city_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <a href="/cities" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection