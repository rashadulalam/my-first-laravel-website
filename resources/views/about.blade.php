@extends('layout.app')
@section("title", "About")

@section('content')

<section class="jumbotron">
    <div class="container">
        <div class="row">
            <h1>About</h1>
        </div>
    </div>
</section>
<section class="my-3 py-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero quo fugit veniam magni! Aliquid dolore saepe impedit labore tempore doloremque, nesciunt commodi ut id placeat.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex voluptatum maiores voluptatibus nesciunt aspernatur minima! Facere quaerat veritatis quidem quo expedita, libero odit? Ex nemo porro inventore iusto laboriosam, tenetur molestiae quia necessitatibus accusamus est libero quisquam nihil ullam obcaecati doloribus perspiciatis voluptates iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa dolorem, tempora dolore quae et nulla alias minus cumque cupiditate iste modi ipsam exercitationem, perspiciatis temporibus eos accusantium? Vel accusamus expedita autem, animi vero fuga harum. Dolorem molestias nemo aperiam suscipit blanditiis ipsum distinctio, pariatur temporibus porro fugiat quae alias quaerat impedit? In debitis ipsa voluptatum, dignissimos maiores obcaecati quisquam nostrum repellat quo! Quis nobis tempore nam assumenda quisquam delectus dicta minima explicabo soluta molestias, illum nemo debitis repellat. Minus corporis architecto eos quis vel necessitatibus, harum deleniti ullam sequi eius praesentium tenetur eligendi nemo, nobis aut, corrupti voluptatum hic dignissimos!</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/copy.jpg')}}" alt="The awesome picture" class="w-100">
            </div>
        </div>
    </div>
</section>

@endsection