@extends('layout.app')
@section("title", "Welcome to Home")

@section('content')
    <section class="banner-area d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
            <div class="col-md-6 text-white text-center mx-auto">
            <h1 class="text-uppercase">Hey, I'm <span class="text-warning">Alam</span></h1>
            <p class="lead">Web designer and developer from Cumilla, Bangladesh. I create custom websites to help business do better online.</p>
            <a href="{{ url('/portfolio')}}" class="btn btn-info btn-lg">My Projects</a>
        </div>
            </div>
        </div>
    </section>
    <section class="py-3 services">
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4 my-2 text-light">
                <h4 class="my-4">Brand Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna.</p>
            </div>
            <div class="col-md-4 my-2 text-light">
                <h4 class="my-4">Seo & Marketing</h4>
                <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna.</p>
            </div>
            <div class="col-md-4 my-2 text-light">
                <h4 class="my-4">Creative Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna.</p>
            </div>
            
        </div>
    </div>
</section>
@endsection