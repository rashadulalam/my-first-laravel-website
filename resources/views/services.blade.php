@extends('layout.app')
@section("title", "Services")


@section('content')

<section class="jumbotron">
    <div class="container">
        <div class="row">
            <h1>Services</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi in, aliquam quod aut consequuntur, itaque ab porro officia magnam facere similique doloribus asperiores. Neque labore qui odio dicta deleniti placeat illum, laborum pariatur, sapiente ducimus ex amet adipisci et sit quasi esse laudantium voluptate earum iure voluptates cupiditate nisi culpa.</p>
        </div>
    </div>
</section>
<section class="my-3 py-3">
    <div class="container">
        <div class="row my-3">

            <div class="col-md-3 my-2">
                <div class="card">
                    <img src="https://picsum.photos/400/400" alt="" class="w-100">
                    <div class="card-body">
                    <h4 class="card-title">Service Name</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, illo.</p>
                    </div>
                </div>
            </div> <!-- col-md-3 -->
            <div class="col-md-3 my-2">
                <div class="card">
                    <img src="https://picsum.photos/400/400" alt="" class="w-100">
                    <div class="card-body">
                    <h4 class="card-title">Service Name</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, illo.</p>
                    </div>
                </div>
            </div> <!-- col-md-3 -->
            <div class="col-md-3 my-2">
                <div class="card">
                    <img src="https://picsum.photos/400/400" alt="" class="w-100">
                    <div class="card-body">
                    <h4 class="card-title">Service Name</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, illo.</p>
                    </div>
                </div>
            </div> <!-- col-md-3 -->
            <div class="col-md-3 my-2">
                <div class="card">
                    <img src="https://picsum.photos/400/400" alt="" class="w-100">
                    <div class="card-body">
                    <h4 class="card-title">Service Name</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, illo.</p>
                    </div>
                </div>
            </div> <!-- col-md-3 -->

        </div> <!-- /row -->
        
    </div> <!-- container -->
    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto shadow p-5">
                <h5 class="text-center">Book now!</h5>
                <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, praesentium.</p>
                
                <form>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="Message">Message:</label>
                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    
                    <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                </form>

                
            </div>
        </div>
    </div> <!-- / container -->
</section>

@endsection