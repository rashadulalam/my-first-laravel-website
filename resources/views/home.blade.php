@extends('layout.app')
@section("title", "Welcome to Home")

@section('content')
    <section class="banner-area d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
            <div class="col-md-6 text-white text-center mx-auto">
            <h1 class="text-uppercase">Hey, I'm Alam</h1>
            <p>Web designer and developer from Cumilla, Bangladesh. I create custom websites to help business do better online.</p>
            <a href="{{ url('/portfolio')}}" class="btn btn-info btn-lg">My Projects</a>
        </div>
            </div>
        </div>
    </section>
@endsection