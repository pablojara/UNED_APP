@extends('layouts.app')

@section('content')
    <a href="/commerces" class="btn btn-secondary my-2 my-sm-0">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Escrito el {{$post->created_at}} por {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/commerces/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
    <br/>
    <br/>
    {!!Form::open(['action' => ['commercesController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection