@extends('layouts.app')

@section('content')
    <h1>Comercios de la Asociación Ópera</h1>
    <div class="row">
            <div class="col-md-12">
          
              <div id="mdb-lightbox-ui"></div>
          
              <div class="mdb-lightbox no-margin">
          
                
    @if(count($commerces) > 0)
        @foreach ($commerces as $commerce)
        <figure class="col-md-4">
                  <img alt="picture" src="/storage/cover_images/{{$commerce->image_id}}"
                    class="img-fluid">
                  <h3 class="text-center my-3"><a href="/profiles/{{$commerce->id}}">{{$commerce->name}}</a></h3>
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