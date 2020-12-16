
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalmostrarpelicula" 
        data-mostrarpelicula="{{$id}}">
    Mostrar
</button>



<form action="{{route('peliculas.destroy')}}" method="POST">
                @csrf
                <input type="text" name ="codigo_pelicula" value="{{$codigo}}"hidden>
                <a href="/peliculas/{{$codigo}}/edit" class="btn btn-info">Editar</a>
                <button type = "submit" class="btn btn-danger">Borrar</button>
</form>



             