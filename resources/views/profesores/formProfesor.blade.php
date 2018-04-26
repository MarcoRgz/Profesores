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
                    {!! Form::model($profesor, ['route' => ['profesor.update', $profesor->nombre], 'method' => 'post']) !!}
                    @else
                  {!! Form::open( ['route' => ['profesor.store'], 'method' =>'post','style'=>'form-bootstrap'] ) !!}
                    @endif
                    {!! Form::label('nombre','  Nombre') !!}
                    {!! Form::text('nombre', null) !!}
                    {!! Form::label('apellidoP','Apellido Paterno') !!}
                    {!! Form::text('apellidoP', null) !!}
                    {!! Form::label('apellidoM','Apellido Materno') !!}
                    {!! Form::text('apellidoM', null) !!}
                    {!! Form::label('centro','Centro') !!}
                    {!! Form::text('centro', null) !!}
                    {!! Form::label('correo','Correo') !!}
                    {!! Form::text('correo', null) !!}
                    {!! Form::label('cargo','Cargo') !!}
                    {!! Form::text('cargo', null) !!}
                    {!! Form::label('departamento','Departamento') !!}
                    {!! Form::text('departamento', null) !!}
                    {!! Form::label('celular','Celular') !!}
                    {!! Form::text('celular', null) !!}
                    {!! Form::label('telExt','Telefono Extension') !!}
                    {!! Form::text('telExt', null) !!}<br><br>

                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close()!!}
                          </div>
            </div>
        </div>
    </div>
</div>
@endsection
