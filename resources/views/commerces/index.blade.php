@extends('layouts.app')

@section('content')
    <h1>Comercios de la Asociación Ópera</h1>
    <div class="row">
            <div class="col-md-12">
          
              <div id="mdb-lightbox-ui"></div>
          
              <div class="mdb-lightbox no-margin">
          
                
    @if(count($commerces) > 0)
        @foreach ($commerces as $post)
        <figure class="col-md-4">
                <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg"
                  data-size="1600x1067">
                  <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg"
                    class="img-fluid">
                  <h3 class="text-center my-3"><a href="/profiles/{{$post->id}}">{{$post->name}}</a></h3>
                </a>
        </figure>
        @endforeach
        {{$commerces->links()}}
    @else
        <p>No se encontraron comercios</p>
    @endif
            </div>
        </div>
    </div>
@endsection