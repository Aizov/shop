@extends("layouts.app")

@section('title')Главная @endsection


@section('content')

    @if($product)
    <div class="row">

        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
            <img class="rounded" src= "/product_img/{{$product->img_url}}" alt="{{$product->name}}" width="540" height="540">
        </div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
            <h2>{{$product->name}}</h2>
            <hr>
            <h5>Описание:</h5>
            <p>{!!$product->description!!}</p>
        </div>
    </div>
    @endif

@endsection