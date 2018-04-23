@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-13 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                  <table class="table table-hover">
                 <thead>
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
                   </thead>

                   <tr>
                       <td>{{ $profesor->id}}</td>
                       <td>{{ $profesor->nombre}}</td>
                     </tr>
                 </table>

                </div>
            </div>
            <a href="{{ route('profesor.create') }}" class="btn btn-success"> Crear mi ficha </a>

        </div>
    </div>
</div>
@endsection
