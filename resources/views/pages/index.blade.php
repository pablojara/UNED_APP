@extends('layouts.app')

@section('content')
   <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="/storage/main_images/real_palace.jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"> <font color="grey">Situados en el barrio de Ópera en Madrid</font> </h3>
        <p><font color="grey">Podrás encontrar una selección de los mejores comercios del barrio de Ópera en Madrid capital</font></p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="/storage/main_images/plaza_isabel1.jpg" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Asociación de Comerciantes Ópera Madrid</h3>
        <p>Un entorno clásico madrileño con una gran oferta de ocio</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="/storage/main_images/tapas1.jpg" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Amplia oferta de restauración</h3>
        <p>Puedes encontrar una amplia selección de bares y restaurantes donde quedarás satisfecho</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="jumbotron text-center">
    <p> Bienvenido a la Asociación de Comerciantes del Barrio de Ópera en Madrid. Un entorno situado en pleno corazón de la capital donde se sitúan
        numerosos comercios, ocio y restauración preparados para ti. En este portal podrás encontrar toda la información relativa a los mismos, noticias, 
        promociones y servicios disponibles. Si posees un negocio situado en la zona, puedes registrarte y comenzar a publicar tu contenido. También puedes personalizar tu perfil
        y añadir la información que desees.
    </p>
</div>

    <!-- !Bottom-bar -->
<div id="bottom-bar" class="solid-bg logo-left" role="contentinfo">
    <div class="wf-wrap">
        <div class="wf-container-bottom">

			
            <div class="wf-float-right">

				<div class="bottom-text-block"><p><a href="/legal/">Aviso Legal</a> | <a href="/cookies/">Política de Cookies</a> | <a href="/privacy/">Política de Privacidad</a></p>
</div>
            </div>

        </div><!-- .wf-container-bottom -->
    </div><!-- .wf-wrap -->
</div><!-- #bottom-bar -->
	</footer><!-- #footer -->

@endsection