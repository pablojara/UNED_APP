@extends('layouts.app')

@section('content')
    <h1>Crear nuevo Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titulo')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' =>'Titulo'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Texto')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>'Body'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
        {{Form::submit('Enviar', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection