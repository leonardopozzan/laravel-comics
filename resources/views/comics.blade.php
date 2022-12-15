@extends('layout.app')

@section('content')

<div class="inner-main">
    <div class="my-container">
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <a href="/singlepage">
                            <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                        </a>
                        <span class="title">{{$comic['series']}}</span>
                    </div>
                    <div class="flip-card-back">
                        <a href="/singlepage">
                            <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                        </a>
                        <span class="title">{{$comic['price']}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection