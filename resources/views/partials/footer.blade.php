<?php 
$linksImage = config('comicsdb.linksImage');
$linksComics = config('comicsdb.linksComics');
$linksShop = config('comicsdb.linksShop');
$linksDc = config('comicsdb.linksDc');
$linksSites = config('comicsdb.linksSites');

?>

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

<section class="links-footer">
    <div class="my-container links-wrap">
        <div class="links">
            <div class="link">
                <span class="title">dc comics</span>
                <ul>
                    @foreach ($linksComics as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
                <span class="title">shop</span>
                <ul>
                    @foreach ($linksShop as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">dc</span>
                <ul>
                    @foreach ($linksDc as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">sites</span>
                <ul>
                    @foreach ($linksSites as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="img-box"><img src="{{Vite::asset('/resources/img/dc-logo-bg.png' )}}" alt=""></div>
    </div>
</section>