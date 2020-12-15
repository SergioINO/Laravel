<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>

<a href="/peliculas/create" class="btn btn-primary">CREAR</a> 


<form action="{{route('peliculas.destroy')}}" method="POST">
                @csrf
                <input type="text" name ="codigo_pelicula" value="{{$codigo}}"hidden>
                <a href="/peliculas/{{$codigo}}/edit" class="btn btn-info">Editar</a>
                <button type = "submit" class="btn btn-danger">Borrar</button>
</form>

             