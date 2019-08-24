@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi Perfil</div>
                <h1>{{$user->name}}</h1>
                <br><br>
                <div>
                    {!!$user->email!!}
                </div>
                <img style="width:50%" src="/storage/cover_images/{{$user->image_id}}">
                <br><br>
                <hr>
                <small>Registrado el {{$user->created_at}}</small>
                <hr>
                @if(!Auth::guest())
                @if(Auth::user()->id == $user->id)
                <a href="/profiles/{{$user->id}}/edit" class="btn btn-outline-primary">Edit</a>
                <br/>
                <br/>
                @endif
                @endif

                
            </div>
        </div>
    </div>
</div>
@endsection
