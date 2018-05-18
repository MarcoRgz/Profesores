<!DOCTYPE html>
<html>
<head>
  <title>Profesores</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <br/>
    <h3 align="center">Profesores Registrados</h3>
    <br/>
    @if($profesor)
     <table class="table table-striped" id='table'>
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Centro</th>
        <th>Correo</th>
        <th>Cargo</th>
        <th>Departamento</th>
        <th>Celular</th>
        <th>Telefono - Ext</th>
        <th>Fecha creacion</th>
        </tr>
      </thead>

      <tbody>

        @foreach($profesor as $row)
        <tr>

           <td>{{ $row->id}}</td></a>
           <td><a href="{{ route('skills.index') }}">{{ $row->nombre}}</td></a>
           <td>{{ $row->apellidoP}}</td>
           <td>{{ $row->apellidoM}}</td>
           <td>{{ $row->centro}}</td>
           <td>{{ $row->correo}}</td>
           <td>{{ $row->cargo}}</td>
           <td>{{ $row->departamento}}</td>
           <td>{{ $row->celular}}</td>
           <td>{{ $row->telExt}}</td>
           <td>{{ $row->created_at}}</td>
         </tr>

        @endforeach
        </tbody>
    </table>
    @endif
   </div>

</div>
<br>
<a href="{{ route('home') }}" class="btn btn-success btn btn-block"> Inicio </a>

</div>
  </div>

  <script>
  $(document).ready( function () {
      $('#table').DataTable();
  } );
  </script>
</body>
</html>
