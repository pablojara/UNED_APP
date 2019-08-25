@extends('layouts.app')

@section('content')
    <h1>Promociones activas</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Escrito el{{$post->created_at}} por {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No se encontraron posts</p>
    @endif
@endsection