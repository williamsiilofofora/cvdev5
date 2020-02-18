@extends('layouts.app')

@section('content')

<section class="slider">
    @include('header.slider')
</section>
<section id="info">
    @include('Apropos.info')
</section>
<section id="aboutMe">
    <div class="aboutMe container-fluid col-sm-12 col-lg-10 col-xl-6">
        <h1 class="bounceInDown animated animation1">A Propos</h1>
        <div class="container row d-sm-inline-flex">
            @include('Apropos.skillbar')
            @include('Apropos.presentation')
        </div>
    </div>
</section>

<section id="services">
    @include('services.services')
</section>

<section id="tech">
 @include('tech.tech')
</section>

<section id="portfolio">
    @include('portfolio.portfolio')
</section>

<section id="contact">
    <div class="titleContact">
        <h1>CONTACTEZ-MOI</h1>
    </div>
    <hr style="width:30%;left:0;">
    <div class="container row mx-auto contact">
        @include('contact.contact')
        @include('contact.form')
    </div>
    <div class=" container-fluid">
        @include('footer.footer')
    </div>

</section>

@endsection