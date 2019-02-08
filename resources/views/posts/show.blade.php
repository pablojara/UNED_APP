@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary my-2 my-sm-0">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection