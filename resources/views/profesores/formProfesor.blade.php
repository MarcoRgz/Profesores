  @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">



          @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>
    @endif

                <div class="form-horizontal" style="margin = 0 auto">
                  <h3>Datos personales</h3>

                <br>


                  @if(isset($profesor))
                    {!! Form::model($profesor, ['route' => ['profesor.update', $profesor->nombre], 'method' => 'post']) !!}
                    @else
                  {!! Form::open( ['route' => ['profesor.store'], 'method' =>'post','class'=>'form-control-lg'] ) !!}
                    @endif
                    <div class="row">


                    <div class="col-lg-4 col-center-block">
                      {!! Form::label('nombre','  Nombre') !!}<br>
                      {!! Form::text('nombre', null) !!}<br>
                      {!! Form::label('apellidoP','Apellido Paterno') !!}<br>
                      {!! Form::text('apellidoP', null) !!}<br>
                      {!! Form::label('apellidoM','Apellido Materno') !!}<br>
                      {!! Form::text('apellidoM', null) !!}
                    </div>
                    <br>


                      <div class="col-lg-4 col-center-block">
                      {!! Form::label('centro','Centro') !!}<br>
                      {!! Form::text('centro', null) !!}<br>
                      {!! Form::label('correo','Correo') !!}<br>
                      {!! Form::text('correo', null) !!}<br>
                      {!! Form::label('cargo','Cargo') !!}<br>
                      {!! Form::text('cargo', null) !!}<br>
                    </div>



                    <div class="col-lg-4 col-center-block">
                    {!! Form::label('departamento','Departamento') !!}<br>
                    {!! Form::text('departamento', null) !!}<br>
                    {!! Form::label('celular','Celular') !!}<br>
                    {!! Form::text('celular', null) !!}<br>
                    {!! Form::label('telExt','Telefono Extension') !!}<br>
                    {!! Form::text('telExt', null) !!}<br>
                  </div>

                                    </div>
                                    <br>
                                    <br>
                            
                    {!! Form::submit('Siguiente', ['class' => 'btn btn-outline-primary btn-block']) !!}
                    {!! Form::close()!!}
          </div>
        </div>



@endsection
