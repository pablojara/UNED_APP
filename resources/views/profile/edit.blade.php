@extends('layouts.app')

@section('content')
    <h1>Editar mi perfil</h1>
    {!! Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Nombre de la tienda')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' =>'Titulo'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Correo electrónico')}}
                {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>'Titulo'])}}
        </div>
        <div class="form-group">
            {{Form::label('location', 'Ubicacion')}}
            {{Form::text('location', $user->location, ['class' => 'form-control', 'placeholder' =>'Titulo'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Descripción de la tienda')}}
            {{Form::text('description', $user->description, ['class' => 'form-control', 'placeholder' =>'Titulo'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Actualizar', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection