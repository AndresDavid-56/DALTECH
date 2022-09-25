@extends('layouts.baselayout')

@section('contenido')
 <h2> Editar Usuario </h2>

 <form action="/users/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nombre Usuario</span>
  <input value="{{$user->name}}" name="name" id="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Apellido Usuario</span>
  <input value="{{$user->last_name}}" name="last_name" id="last_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
  <input value="{{$user->phone}}" name="phone" id="phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input value="{{$user->email}}" name="email" id="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
  <input value="{{$user->password}}" name="password" id="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
    <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection