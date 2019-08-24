@extends('layouts.app')

@section('content')
    <h1>commerces</h1>
    @if(count($commerces) > 0)
        @foreach ($commerces as $post)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                <h3><a href="/commerces/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Escrito el{{$post->created_at}} por {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$commerces->links()}}
    @else
        <p>No se encontraron comercios</p>
    @endif
@endsection