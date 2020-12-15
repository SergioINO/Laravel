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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  </head>

  <body>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="bg-primary text-white text-center">CRUD PELICULA</h1>
                    <!-- <h3><strong>Laravel 8 Datatable Example</strong></h3> -->
                </div>
            </div>
            <table class="table table-bordered data-table">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>


  <script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
                    serverSide: true,

                    ajax: {
                        url: "{{ route('indexpeliculas') }}",
                        type: 'GET',
                        //   success: function(data)
                        //  {
                        //     console.log(data); //*** returns correct json data
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