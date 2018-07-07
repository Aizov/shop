@extends("layouts.app")

@section('title')Главная @endsection


@section('content')

    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach($products as $products)

            <div class="col-lg-4">
                <a class="p-3 mb-2 bg-gradient-light text-dark" style="text-decoration: none" href="{{ route('productShow',['id' => $products->id]) }}">
                    <img class="rounded-circle" src="/product_img/{{$products->img_url}}" alt="Generic placeholder image" width="140" height="140">
                    <h2>{{$products->name}}</h2>
                    <h5>Цена: {{$products->cost}}</h5>
                </a>
            </div>
        @endforeach
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    @endsection
