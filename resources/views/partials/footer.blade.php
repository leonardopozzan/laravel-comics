<?php 
$linksImage = config('comicsdb.linksImage');
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
{{-- <section class="links-footer">
    <div class="my-container links-wrap">
        <div class="links">
            <div class="link">
                <span class="title">dc comics</span>
                <ul>
                    <li v-for="(link, i) in linksComics" :key="i"><a href="link.url">{{link.text}}</a></li>
                </ul>
                <span class="title">shop</span>
                <ul>
                    <li v-for="(link, i) in linksShop" :key="i"><a href="link.url">{{link.text}}</a></li>
                </ul>
            </div>
            <div class="link">
                <span class="title">dc</span>
                <ul>
                    <li v-for="(link, i) in linksDc" :key="i"><a href="link.url">{{link.text}}</a></li>
                </ul>
            </div>
            <div class="link">
                <span class="title">sites</span>
                <ul>
                    <li v-for="(link, i) in linksSites" :key="i"><a href="link.url">{{link.text}}</a></li>
                </ul>
            </div>
        </div>
        <div class="img-box"><img src="/img/dc-logo-bg.png" alt=""></div>
    </div>
</section> --}}