@extends('site.layout.main')
@section('title' , $page->title)
<style>
.gallery_box li {
    width: 100%;
    max-width: 100%;
    display: inline-block;
    float: left;
    text-align: center;
    overflow: hidden;
    position: relative;
    margin: 4px 0;
    border: 8px solid #dee2e6;
}

    .gallery_box img {
        width: 100%
    }

    .gallery_box {
        padding: 0;
        display: flow-root;
    }

    .gallery_box li:hover img {
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }

    .gallery_box li img {
        -webkit-transition: transform 0.5s ease;
        -o-transition: transform 0.5s ease;
        transition: transform 0.5s ease;
    }

    .gallery_box li:nth-child(even) {
        height: 304px;
    }

    .gallery_box li:nth-child(odd) {
        height: 438px;
    }

    .gallery_box li:nth-child(odd) .box_data {
        background: rgba(0, 0, 0, 0.17)
    }

    .gallery_box li:nth-child(even) .box_data {
        background: rgba(0, 44, 255, 0.27)
    }

    .gallery_box li:hover .box_data {
        background: rgba(255, 0, 39, 0.55)
    }
</style>
@section('main')
<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset($page->getAttributes()["cover_image"] ? $page->cover_image :  'site/assets/cover.png') }}');background-position: 50% 28%">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">{{ $page->title }}</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('site.home') }}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span>
                    <span>{{ $page->title }} </span>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last ftco-animate">
                <h2 class="mb-3">{{ $page->title }}</h2>
                {!! $page->body !!}
            </div>
        </div>
    </div>
</section>
@endsection
