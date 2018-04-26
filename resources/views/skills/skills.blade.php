@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">

                  <table class="table table-striped">
                 <thead>
                     <th>id</th>
                     <th>nombre</th>
                     <th>Habilidades</th>
                     <th>Extras</th>

                   </thead>
                 </table>
                 <br><br>
                 {!! Form::open( ['route' => ['profesor.store'], 'method' =>'post','style'=>'table-striped'] ) !!}

                   {!! Form::label('nombre','  Nombre') !!}<br>
                   {!! Form::text('nombre', null) !!} <br>
                   {!! Form::label('Habilidades','Habilidades ') !!} <br>
                   {!! Form::text('habilidades', null) !!}<br>
                   {!! Form::label('extras','Extras') !!}<br>
                   {!! Form::text('extras', null) !!} <br><br>

                   {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                   {!! Form::close()!!}
                   <br>
                </div>
            </div>
            <br><br>
            <a href="{{ route('profesor.index') }}" class="btn btn-success btn-block "> Inicio</a>
        </div>
    </div>

</div>
@endsection
