@extends('layouts.plantillaindex');

@section('contenido')
<!--  el / antes de la url me resetea la url si no lleva / me agrega otra url 
<a href="/peliculas/create" class="btn btn-primary">CREAR</a>   -->

<!-- <table class="table table-dark  table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($peliculas as $pelicula)
        <tr>
            <td>{{$pelicula->id}}</td>
            <td>{{$pelicula->codigo}}</td>
            <td>{{$pelicula->descripcion}}</td>
            <td>{{$pelicula->cantidad}}</td>
            <td>{{$pelicula->precio}}</td>
            <td>
             
             <form action="{{route('peliculas.destroy')}}" method="POST">
                @csrf
                <input type="text" name ="id_pelicula" value="{{$pelicula->id}} "hidden>
                <a href="/peliculas/{{$pelicula->id}}/edit" class="btn btn-info">Editar</a>
                <button type = "submit" class="btn btn-danger">Borrar</button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>   -->

@endsection