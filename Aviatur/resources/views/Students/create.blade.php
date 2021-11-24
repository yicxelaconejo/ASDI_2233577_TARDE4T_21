@extends('plantillaweb')

@section('home_web')
    <h2>Formulario de registro de Students</h2>
<form action="{{route('Students.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nombres completos...</label>
      <input type="text" class="form-control" name="Nombres" placeholder="Escriba su nombre...">
      <label>Celular...</label>
      <input type="number" class="form-control" name="Celular" placeholder="Escriba su celular...">
      <label>Correo...</label>
      <input type="correo" class="form-control" name="Correo" placeholder="Escriba su correo...">
      <label>Tarjeta identidad...</label>
      <input type="number" class="form-control" name="Num_tarjeta" placeholder="Escriba su tarjeta de identidad...">

    </div>
    
    <button type="submit" class="btn btn-danger">Enviar</button>
  </form>

@endsection