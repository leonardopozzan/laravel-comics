@extends('layout.app')

@section('content')
<div class="jumbo">
    <div class="my-container">
        <div class="title">
            current series
        </div>
    </div>
</div>



    <ul>
        @foreach ($comics as $comic)
            <li>
                {{$comic['title']}}
            </li>
        @endforeach
    </ul>
    
@endsection