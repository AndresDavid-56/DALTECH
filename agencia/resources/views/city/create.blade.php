@extends('layouts.baselayout')

@section('contenido')
 <h2> Crear Ciudad </h2>

 <form action="/cities" method="POST">
    @csrf
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Ciudad</span>
  <input name="city_name" id="city_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <a href="/cities" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection