@extends('site.layout.main')
@section('title' , "Home")
@section('main')
<section class="hero-wrap js-fullheight" style="background-image: url('{{ asset("site/images/bg_1.jpg") }}');"
    data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play play mr-2"></span>
                        <span class="watch">Watch Video</span>
                    </a>
                </p>
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have a passion
                    in creating new and unique spaces</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any
                    corner of the world, without going around in circles</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services ftco-no-pt">
    <div class="container">
        <div class="row services-section">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-layers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Perfectly Design</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your mouth.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-compass-symbol"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Carefully Planned</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your mouth.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-layers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Smartly Execute</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your mouth.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="img d-flex align-self-stretch align-items-center"
                    style="background-image:url({{ asset('site/images/about.jpg') }});">
                    <div class="request-quote py-5">
                        <div class="py-2">
                            <span class="subheading">Be Part of our Business</span>
                            <h3>Request A Quote</h3>
                        </div>
                        <form action="#" class="request-form ftco-animate">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon-arr"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Services</option>
                                            <option value="">Construction</option>
                                            <option value="">Renovation</option>
                                            <option value="">Interior Design</option>
                                            <option value="">Exterior Design</option>
                                            <option value="">Painting</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h2 class="mb-4">Since we started work in 1980</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your mouth.</p>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem
                            Ipsum decided to leave for the far World of Grammar.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your mouth.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Years of experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="1000">0</strong>
                                <span>Project Done</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Our Architect</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
                        <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                            <div class="text">
                                <strong class="number" data-number="1100">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Our Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 testimonial">
                <div class="carousel-project owl-carousel">
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-1.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-1.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-2.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-2.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-3.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-3.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-4.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-4.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-5.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-5.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{ asset('site/images/project-6.jpg') }}" class="img-fluid"
                                    alt="test Template">
                                <a href="{{ asset('site/images/project-6.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" data-section="team">
    <div class="container-fluid p-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Architect</span>
                <h2 class="mb-4">Behind those Beautiful Works</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/team-1.jpg') }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Lloyd Wilson</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/team-2.jpg') }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Rachel Parker</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/team-3.jpg') }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Ian Smith</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/team-4.jpg') }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Alicia Henderson</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/staff-1.jpg') }});">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Lloyd Wilson</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/staff-2.jpg') }});">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Rachel Parker</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/staff-3.jpg') }});">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Ian Smith</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url({{ asset('site/images/staff-4.jpg') }});">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Architect</span>
                            <h3 class="mb-4">Alicia Henderson</h3>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimony-section" data-section="testimony">
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12 d-flex align-items-center">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch">
                            <div class="user-img d-flex align-self-stretch"
                                style="background-image: url({{ asset('site/images/testimony-1.jpg') }})">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="icon-quote">
                                        <span class="icon-quote-left"></span>
                                    </div>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. A small river named
                                        Duden flows by their place and supplies it with the necessary regelialia. It
                                        is a paradisematic country, in which roasted parts of sentences fly into
                                        your mouth.</p>
                                    <p class="name">Jacob Bolton</p>
                                    <span class="position">CEO, Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch">
                            <div class="user-img d-flex align-self-stretch"
                                style="background-image: url({{ asset('site/images/testimony-2.jpg') }})">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="icon-quote">
                                        <span class="icon-quote-left"></span>
                                    </div>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. A small river named
                                        Duden flows by their place and supplies it with the necessary regelialia. It
                                        is a paradisematic country, in which roasted parts of sentences fly into
                                        your mouth.</p>
                                    <p class="name">Jacob Bolton</p>
                                    <span class="position">CEO, Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" data-section="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Read Our Stories</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_1.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">12</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_2.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">10</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_3.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">05</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_4.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">12</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_5.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">10</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20"
                        style="background-image: url('{{ asset('site/images/image_6.jpg') }}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">
                            <div class="one mr-3">
                                <span class="day">05</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" data-section="contact" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Contact Us</h2>
                <p>
                    <address>
                        <span class="addressdetails_companyprofile">Building: </span>Al Hejaz
                        International School Building<br><span class="addressdetails_companyprofile">Street:
                        </span>Sabreen
                        Street<br><span class="addressdetails_companyprofile">Area: </span>Al
                        Aziziyah Area<br><span class="addressdetails_companyprofile">P.O. Box:
                        </span>4100<br><span class="addressdetails_companyprofile">Country:
                        </span>Saudi Arabia<br><span class="addressdetails_companyprofile"> City:
                        </span>Jeddah<br><span class="addressdetails_companyprofile">City Suffix:
                        </span>21491
                    </address>
                </p>
            </div>
        </div>
        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="{{ route('site.contact_us.send') }}" method="POST" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Your Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Your Email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                            placeholder="Subject" value="{{ old('subject') }}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="msg" id="" cols="30" rows="7"
                            class="form-control @error('msg') is-invalid @enderror"
                            placeholder="Message">{{ old('msg') }}</textarea>
                        @error('msg')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.9665432576408!2d39.204544914397445!3d21.548163485719332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1c619dd1215:0x3aa7c4e8e0e1357a!2sal%20hejaz%20international%20school!5e0!3m2!1sen!2ssa!4v1482094331214"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                    <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
