<nav class="navbar navbar-expand-md navbar-light bg-white">
<div class="container">
    <a href="{{ url('/') }}"><img style="width:65%" href="{{ url('/') }}" src="/storage/main_images/opera_logo.png"></a>
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
                <a class="nav-link" href="/noticias">NOTICIAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">COMERCIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">PROMOCIONES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">SERVICIOS</a>
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
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>
                        <a class="dropdown-item" href="/dashboard">
                            {{ __('Mi Panel') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <a href="/services/create" class="btn btn-primary">Crear Post</a>
            @endguest
        </ul>
    </div>
</div>
</nav>

<br/>
