@extends('layout.app')
@section('title', 'Contact us')

@section('content')
<section class="jumbotron m-0">
    <div class="container">
        <div class="row">
            <h1>Contact us</h1>
        </div>
    </div>
</section>
<section class="py-5 contact">
    
    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto shadow p-5 bg-white rounded">
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