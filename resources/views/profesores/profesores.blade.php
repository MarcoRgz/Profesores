@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>
    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Registro profesores</div>
                <div class="panel-body">
                  <form>
                    @if(isset($profesor))
                      {!! Form::model($profesor, ['route' => ['profesor.create',
                       $profesor->id], 'method' => 'patch']) !!}
                      @else
                    {!! Form::open(['route' => 'profesor.store']) !!}
                      @endif
                      {!! Form::label('nombre','  Nombre') !!}
                      {!! Form::text('nombre', null) !!}<br>
                      {!! Form::label('apellido','Apellido') !!}
                      {!! Form::text('apellido', null) !!}<br>
                      {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                      {!! Form::close()!!}
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
