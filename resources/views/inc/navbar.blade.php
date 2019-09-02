<!doctype html>
<html>
  <head>
    <title>Asociacion de Comerciantes de Opera</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="" />
  <meta property="og:type"          content="" />
  <meta property="og:title"         content="Asociacion de Comerciantes de Opera" />
  <meta property="og:description"   content="Asociacion de Comerciantes de Opera" />
  <meta property="og:image"         content="" />
  </head>

<nav class="navbar navbar-expand-md navbar-light bg-white">
<div class="container">
    <a href="{{ url('/') }}"><img style="width:75%" href="{{ url('/') }}" src="/storage/main_images/opera_logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">ASOCIACIÓN <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/commerces">COMERCIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/noticias">NOTICIAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/promociones">PROMOCIONES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/servicios">SERVICIOS</a>
            </li>
            </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-success">Entrar</a> 
                    &nbsp;&nbsp;&nbsp;
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-primary">Hazte Socio</a>
                    </li>
                @endif
            @else
                <li></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard">
                            {{ __('Mi panel') }}
                        </a>
                        <a class="dropdown-item" href="/profiles">
                            {{ __('Editar mi perfil') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <a href="/posts/create" class="btn btn-primary">Crear Post</a>
            @endguest
        </ul>
    </div>
    
</div>

<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="https://www.your-domain.com/your-page.html" 
    data-layout="button_count">
  </div>

  <script>window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
  
    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };
  
    return t;
  }(document, "script", "twitter-wjs"));</script>
<a class="twitter-share-button"
href="https://twitter.com/intent/tweet?text=Asociación de comerciantes de Ópera!">
Tweet</a>

</nav>

<br/>
