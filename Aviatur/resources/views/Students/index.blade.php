@extends('plantillaweb')

@section('home_web')



<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombres</th>
        <th scope="col">Celular</th>
        <th scope="col">Correo</th>
        <th scope="col">Num_tarjeta</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Students as $Student)
        <tr>
            <th scope="row">{{$Student->id}}</th>
            <td>{{$Student->Nombres}}</td>
            <td>{{$Student->Celular}}</td>
            <td>{{$Student->Correo}}</td>
            <td>{{$Student->Num_tarjeta}}</td>
            <td>
              <a href="{{route('Students.edit', $Student)}}">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
              </a>
            </td>
          </tr>

      
          
        @endforeach
      
      
    </tbody>
  </table>
    {{$Students -> links()}}


@endsection