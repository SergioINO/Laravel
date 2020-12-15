@extends('layouts.plantillaedit');

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="{{route('peliculas.update')}}" method="POST">
    @csrf    
    <input type="text" name ="id_pelicula" value="{{$peliculas->id}} "hidden>   

  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$peliculas->codigo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$peliculas->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$peliculas->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$peliculas->precio}}">
  </div>
  <a href="/peliculas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection