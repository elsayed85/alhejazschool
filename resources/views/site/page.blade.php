@extends('site.layout.main')
@section('title' , $page->title)
@section('main')
<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset($page->cover_image ?? 'site/assets/cover.png') }}');background-position: 50% 28%">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">{{ $page->title }}</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('site.home') }}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="#">Pages <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>{{ $page->title }} <i class="ion-ios-arrow-forward"></i></span>
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
