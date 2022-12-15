@extends('layout.app')

@section('content')
<div class="jumbo">
    <div class="my-container">
        <div class="title">
            current series
        </div>
    </div>
</div>
<div class="inner-main">
    <div class="my-container">
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                        <span class="title">{{$comic['series']}}</span>
                    </div>
                    <div class="flip-card-back">
                        <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                        <span class="title">{{$comic['price']}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection