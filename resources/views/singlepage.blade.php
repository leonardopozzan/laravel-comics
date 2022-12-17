@extends('layout.app')

@section('content')
<div class="blue"></div>
<section class="my-container position-relative" id="singlepage">
    <div class="img-box"><img src="{{$comics['thumb']}}" alt=""></div>
    <div class="pt-5 row">
        <div class="col-8">
            <div class="title">
                action comics #1000: the deluxe edition
            </div>
            <div class="price">
                <div class="ps-4"><span class="opacity-75">U.S. Price</span> {{$comics['price']}}</div>
                <div class="d-flex align-items-center h-100">
                    <div class="text-uppercase pe-4 opacity-75">available</div>
                    <div class="px-4 my-border h-100">Check Availability</div>
                </div>
            </div>
            <p>{{$comics['description']}}</p>
        </div>
        <div class="col-4">
            <div class="text-uppercase text-end fw-bold">advertisement</div>
            <img src="{{ Vite::asset('resources/img/cover.jpg') }}" alt="" class="w-100">
        </div>
    </div>
</section>
<section id="details">
    <div class="my-container d-flex">
        <div class="col-6 me-3">
            <div class="title my-border">Talent</div>
            <div class="d-flex justify-content-between py-2 my-border">
                <div class="sub-title">Art by</div>
                <div class="text-blue w-75">
                    @foreach ($comics['artists'] as $key => $artist)
                        @if($key == count($comics['artists']) - 1)
                            {{$artist}}
                        @else
                            {{$artist}},
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-between py-2 my-border">
                <div class="sub-title">Written by</div>
                <div class="text-blue w-75">
                    @foreach ($comics['writers'] as $key => $artist)
                        @if($key == count($comics['writers']) - 1)
                            {{$artist}}
                        @else
                            {{$artist}},
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6 ms-3">
            <div class="title my-border">Specs</div>
            <div class="d-flex py-2 my-border">
                <div class="sub-title col-4">Series:</div>
                <div class="col-4 text-uppercase text-blue">{{$comics['series']}}</div>
            </div>
            <div class="d-flex py-2 my-border">
                <div class="sub-title col-4">U.S. price:</div>
                <div class="col-4 text-uppercase fw-bold">{{$comics['price']}}</div>
            </div>
            <div class="d-flex py-2 my-border">
                <div class="sub-title col-4">On Sale Date:</div>
                <div class="col-4 text-uppercase fw-bold">{{$comics['sale_date']}}</div>
            </div>
        </div>
    </div>
</section>
@endsection