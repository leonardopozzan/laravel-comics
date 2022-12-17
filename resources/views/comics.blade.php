@extends('layout.app')
<?php 
$linksImage = config('comicsdb.linksImage');

?>
@section('content')

<main>
    <div class="inner-main">
        <div class="my-container">
            <div class="cards">
                @foreach ($comics as $key => $comic)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="{{'/singlepage' . $key}}">
                                <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                            </a>
                            <span class="title">{{$comic['series']}}</span>
                        </div>
                        <div class="flip-card-back">
                            <a href="{{'/singlepage' . $key}}">
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
</main>
<section class="icons-wrap">
    <div class="icons">
        @foreach ($linksImage as $link)
        <div class="icon">
            <img src="{{Vite::asset('resources/img/' . $link['url'] )}}" class="img-icon">
            <a href="#">{{$link['text']}}</a>
        </div>
        @endforeach
    </div>
</section>
@endsection