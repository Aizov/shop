@extends("layouts.app")

@section('title')Главная @endsection


@section('content')

    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach($ads as $ads)
            @if($ads->active == true)
                <div>
                    <h2>{{$ads->ad}}</h2>
                    <p>{{$ads->text}}</p>
                    <hr>
                </div>
            @endif
        @endforeach
    </div><!-- /.row -->

@endsection