@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">

          @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>
    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Registro ficha</div><br>
                <div class="panel-body">

                  @if(isset($profesor))
                    {!! Form::model($profesor, ['route' => ['profesor.store'], 'method' => 'post']) !!}
                    @else
                  {!! Form::open( ['route' => ['profesor.store'], 'method' =>'post']) !!}
                    @endif
                    {!! Form::label('nombre','  Nombre') !!}
                    {!! Form::text('nombre', null) !!}<br>
                    {!! Form::label('apellido','Apellido') !!}
                    {!! Form::text('apellido', null) !!}<br>
                    {!! Form::label('centro','Centro') !!}
                    {!! Form::text('centro', null) !!}<br>
                    {!! Form::label('division','Division') !!}
                    {!! Form::text('division', null) !!}<br>
                    {!! Form::label('correo','Correo') !!}
                    {!! Form::text('correo', null) !!}<br>
                    {!! Form::label('celular','Celular') !!}
                    {!! Form::text('celular', null) !!}<br>
                    {!! Form::label('redsocial','Red social') !!}
                    {!! Form::text('redsocial', null) !!}<br><br>

                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close()!!}
                          </div>
            </div>
        </div>
    </div>
</div>
@endsection
