@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  You are logged in! </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                      <a href="{{ route('profesor.create') }}" class="btn btn-success"> Crear mi ficha </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
