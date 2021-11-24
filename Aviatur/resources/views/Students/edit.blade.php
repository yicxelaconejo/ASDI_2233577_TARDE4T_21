@extends('plantillaweb')
@section('home_web')
    <h2>Editar registro de estudiante {{$Student->id}}</h2>
    <form action="{{route('Students.update', $Student)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label>Nombres completos...</label>
          <input type="text" name="Nombres" placeholder="Nombres" class="form-control mb-2" value="{{$Student->Nombres}}">
          <label>Celular...</label>
          <input type="number" name="Celular" placeholder="Celular" class="form-control mb-2" value="{{$Student->Celular}}">
          <label>Correo...</label>
          <input type="correo" name="Correo" placeholder="Correo" class="form-control mb-2" value="{{$Student->Correo}}">
          <label>Tarjeta identidad...</label>
          <input type="number" name="Num_tarjeta" placeholder="Num_tarjeta" class="form-control mb-2" value="{{$Student->Num_tarjeta}}">
    
        </div>
        
        <button type="submit" class="btn btn-danger">Enviar</button>
      </form>
      @endsection    
    
