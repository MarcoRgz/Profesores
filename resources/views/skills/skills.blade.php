@extends('layouts.app')

@section('content')
<div class="container">


            <div class="panel panel-center">
                <div class="panel-success"><h3>Habilidades</h3> </div>

                <div class="panel-body">

                  <table class="table table-striped">
                 <thead>
                     <th>id</th>
                     <th>nombre</th>
                     <th>Habilidades</th>
                     <th>Extras</th>

                   </thead>
                 </table>
          
                </div>

            <br><br>
            <a href="{{ route('profesor.index') }}" class="btn btn-success btn-block " class="panel-centerd"> Inicio</a>
        </div>


</div>
@endsection
