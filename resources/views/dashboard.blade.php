@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi Panel</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) == 0)
                    <h2>Todavia no has creado ningun post!</h2>
                    <a href="/services/create" class="btn btn-primary">Crear Post</a>
                    @endif
                    @if(count($posts) > 0)
                    <a href="/services/create" class="btn btn-primary">Crear Post</a>
                    <h3>Tus Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Titulo</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Editar</a></td>
                                <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}</td>
                            </tr>
                        @endforeach
                        </table>
                        @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
