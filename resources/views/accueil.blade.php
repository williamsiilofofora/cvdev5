@extends('layouts.app')

@section('content')
<section class="slider parallax-container" >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="{{asset('./images/background.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block fadeOut">
                    <h5 class="">Developpeur Web</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="{{asset('./images/fondo-abst.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block fadeOut">
                    <h5 class="">Design Web</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="{{asset('./images/fond-tech.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block fadeOut">
                    <h5 class="">Developpeur D'applications</h5>
                    <p>...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="chevron" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="chevron" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="content-container">

</section>
<button id="darkTrigger">Activer le thème sombre</button>
<section id="contact">
    <div class="titleContact">
        <h2>CONTACTEZ-MOI</h2>
    </div>
    <hr style="width:30%;left:0;">
    <div class="container row mx-auto contact">
        @include('form.contact')
        @include('form.form')
    </div>
</section>

@endsection