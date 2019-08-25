@extends('layouts.app')

@section('content')
    <a href="/commerces" class="btn btn-secondary my-2 my-sm-0">Go back</a>
    <h1>{{$user->name}}</h1>
    <img style="width:40%" src="/storage/cover_images/{{$user->image_id}}">
    <br><br>
    <h4>Descripción</h4>
                <div>
                    {!!$user->description!!}
                </div>
                <h4>Ubicación</h4>
                <div>{{$user->location}}</div>
                <h4>Correo electrónico</h4>
    <div>
        {!!$user->email!!}
    </div>
    <hr>
    <small>Registrado el {{$user->created_at}}</small>
    <hr>
@endsection