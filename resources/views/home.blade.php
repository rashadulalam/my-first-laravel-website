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
    </section> <!-- services -->

    <section class="py-3 about">
        <div class="container">
            <div class="row my-3">
                
                <div class="col-md-6 my-2">
                    <img src="{{ asset('images/copy.jpg')}}" alt="Copy" class="w-100">
                </div>

                <div class="col-md-6 my-2">
                    <h4 class="my-4"><span class="text-warning">Brand Design</span> <br><span class="display-4">We are Design &<br>
Development Team.</span></h4>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero distinctio cupiditate sed odio earum alias quidem eaque perferendis ad, maxime architecto, obcaecati aut, voluptatibus voluptas aperiam veritatis ratione possimus fugit minima deserunt placeat. Temporibus eligendi quasi praesentium voluptatem, dolor quam qui, distinctio quod cumque, cupiditate fugit enim. Explicabo, eius ut!</p>
                    <button class="btn btn-warning btn-lg text-light">Purchase Now</button>
                </div>
                
                
            </div>
        </div>
    </section> <!-- about -->
    <section class="py-3 callto bg-info">
        <div class="container">
            <div class="row my-3 align-items-center">
                
                <div class="col-md-10">
                    <h4 class="display-4 text-white">Alam Give The Smart Solution For Your Business</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-secondary btn-lg" href="{{url('/contact')}}">Get A Quote</a>
                </div>
                
                
            </div>
        </div>
    </section>

@endsection