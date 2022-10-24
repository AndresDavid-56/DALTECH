@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

<form action="/users/{{$user->id}}" method="POST">
   @csrf
   @method('PUT')
   
   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
    <input value="{{$user->name}}" name="name" id="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
    <input value="{{$user->last_name}}" name="last_name" id="last_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
    <input value="{{$user->phone}}" name="phone" id="phone" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input value="{{$user->email}}" name="email" id="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
    <input value="{{$user->password}}" name="password" id="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Rol</label>
    <div class="col-sm-10">


    @foreach ($roles as $role)
    <div class="form-check">
    <input value="{{$role->id}}" class="form-check-input" type="radio" name="roles[]" >
      <label value="{{$role->id}}" class="form-check-label">
        {{$role->name}} 
      </label>
    </div>
    @endforeach


    </div>
  </div>
   <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary">Editar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop