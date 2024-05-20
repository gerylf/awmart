@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div style="margin-top: 80px;" id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="width: 80%; margin: 0 auto;">
        <div class="carousel-item active c-item">
            <img src="/images/carousel1.jpg" class="d-block w-100 c-img" alt="slide1">
        </div>
        <div class="carousel-item c-item">
            <img src="/images/carousel1.jpg" class="d-block w-100 c-img" alt="slide2">
        </div>
        <div class="carousel-item c-item">
            <img src="/images/carousel1.jpg" class="d-block w-100 c-img" alt="slide3">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@include('Component.footer')
@endsection