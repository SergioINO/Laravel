<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    -->
    
    <title>CRUD con datatable</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    
  <body>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="bg-primary text-white text-center">CRUD PELICULA</h1>
                    <!-- <h3><strong>Laravel 8 Datatable Example</strong></h3> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Crear
                    </button>
                </div>
            </div>
            <table id="midatatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
   </div>

   <!-- <h1 class="bg-primary text-white text-center">CRUD PELICULA</h1>
      Contenedor de Bootstrap   -->
    <div class= "container">
        @yield('contenido')
    </div>
    
    
    <!-- Button trigger modal -->
    
    <!-- Modal Crear Peliculas -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear Pelicula</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        
          <div class="modal-body">
            <form action="{{route('crearpeliculas')}}" method="POST">
                @csrf
                 <div class="mb-3">
                   <label for="" class="form-label">Código</label>
                   <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Descripción</label>
                   <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Cantidad</label>
                   <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Precio</label>
                   <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Duracion</label>
                   <input id="duracion" name="duracion" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Anio</label>
                   <input id="anio" name="anio" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Valoracion</label>
                   <input id="valoracion" name="valoracion" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Nombre</label>
                   <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
                 </div>
               
               
                 <a href="/peliculas" class="btn btn-secondary" tabindex="5">Cancelar</a>
                 <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
               </form>
            
            </div>
        
        </div>
      </div>
    </div>


    <!-- Modal Mostrar Peliculas -->
    <div class="modal fade" id="modalmostrarpelicula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mostrando Pelicula</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        
          <div class="modal-body">
            <form action="{{route('crearpeliculas')}}" method="POST">
                @csrf
                 <div class="mb-3">
                   <label for="" class="form-label">Código</label>
                   <input  name="codigo" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Descripción</label>
                   <input  name="descripcion" type="text" class="form-control" tabindex="2">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Cantidad</label>
                   <input  name="cantidad" type="number" class="form-control" tabindex="3">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Precio</label>
                   <input  name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Duracion</label>
                   <input  name="duracion" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Anio</label>
                   <input  name="anio" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Valoracion</label>
                   <input  name="valoracion" type="text" class="form-control" tabindex="1">    
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">Nombre</label>
                   <input  name="nombre" type="text" class="form-control" tabindex="1">    
                 </div>
               
               
                 <a href="/peliculas" class="btn btn-secondary" tabindex="5">Cancelar</a>
                 <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
               </form>
            
            </div>
        
        </div>
      </div>
    </div>
  
  
    
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  

  <script type="text/javascript">
  $(function () {
      //el # hace referencia a la id de la tabla y el . hace referencia a una clase
    var table = $('#midatatable').DataTable({
        processing: true,
                    serverSide: true,

                    ajax: {
                        url: "{{ route('indexpeliculas') }}",
                        type: 'GET',
                        //    success: function(data)
                        //   {
                        //      console.log(data); //*** returns correct json data
                        //  }
                    },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'codigo', name: 'codigo'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'cantidad', name: 'cantidad'},
            {data: 'precio', name: 'precio'},
            {data: 'option_button', name: 'option_button', orderable: false, searchable: false},
        ]
    });
   });
  </script> 
  
    
</html>