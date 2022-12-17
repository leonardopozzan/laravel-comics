@extends('layout.app')

@section('content')
<div class="blue"></div>
<div class="my-container position-relative" id="singlepage">
    <div class="img-box"><img src="{{$comics['thumb']}}" alt=""></div>
    <div class="pt-5">
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
</div>

@endsection