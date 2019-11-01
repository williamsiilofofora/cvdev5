@extends('layouts.app')

@section('content')
<section class="slider parallax-container" >
    @include('header.slider')
</section>
<section class="content-container">
        @include('Apropos.skillbar')

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
</section>
@endsection