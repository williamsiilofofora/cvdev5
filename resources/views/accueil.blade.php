@extends('layouts.app')

@section('content')
<section class="slider parallax-container">
    @include('header.slider')
</section>
<section class="content-container">
    <section id="aboutMe" class="container-fluid col-sm-12 col-lg-10 col-xl-6">
    <div class="aboutMe ">
        <h2 class="from-right">A Propos</h2>
    <div class="container row d-sm-inline-flex">
        @include('Apropos.skillbar')
        @include('Apropos.presentation')
    </div>
    </div>
    </section>
</section>
    <section id="services">
        @include('services.services')
    </section>
    <button id="darkTrigger">Activer le thème sombre</button>
    <section id="contact">
        <div class="titleContact">
            <h2>CONTACTEZ-MOI</h2>
        </div>
        <hr style="width:30%;left:0;">
        <div class="container row mx-auto contact">
            @include('contact.contact')
            @include('contact.form')
        </div>
    </section>

@endsection