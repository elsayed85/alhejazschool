@extends('site.layout.main')
@section('title' , "Home")
@section('css')
<style>
    .crossfade>figure {
        animation: imageAnimation 30s linear infinite 0s;
        backface-visibility: hidden;
        background-size: cover;
        background-position: center center;
        color: transparent;
        height: 100%;
        left: 0px;
        opacity: 0;
        position: absolute;
        top: 0px;
        width: 100%;
        z-index: 0;
    }

    .crossfade>figure:nth-child(1) {
        background-image: url('{{ asset('storage/gallery/1.jpg') }}');
    }

    .crossfade>figure:nth-child(2) {
        animation-delay: 6s;
        background-image: url('{{ asset('storage/gallery/2.jpg') }}');
    }

    @keyframes imageAnimation {
        0% {
            animation-timing-function: ease-in;
            opacity: 0;
        }

        8% {
            animation-timing-function: ease-out;
            opacity: 1;
        }

        17% {
            opacity: 1
        }

        25% {
            opacity: 0
        }

        100% {
            opacity: 0
        }
    }
</style>
@endsection
@section('main')
<section class="hero-wrap js-fullheight crossfade" data-section="home">
    <figure></figure>
    <figure></figure>
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    Welcome to Al Hejaz International School
                </h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Al Hejaz International
                    School has a distinctive collegiate structure. Students and academics benefit from belonging both to
                    the School, a large, internationally-renowned institution, and to a college or hall, a small,
                    interdisciplinary academic community. </p>
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
                        <h3 class="heading mb-3">OUR MISSION</h3>
                        <p>To be the leading English speaking International School in Jeddah ...
                        </p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'our-mission']) }}"
                                class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-compass-symbol"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">OUR VISION</h3>
                        <p>To create an inspirational lifelong learning campus ...
                        </p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'our-vision']) }}"
                                class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-layers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">OUR ETHOS</h3>
                        <p>Our ethos is defined by Faith, Excellence and Service.</p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'our-ethos']) }}"
                                class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row services-section">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-layers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">FAITH</h3>
                        <p>
                            Through the curriculum and the work of our staff, we focus on key aspects of our
                            faith, so that our students...
                        </p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'faith']) }}" class="btn btn-primary">Read
                                more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-compass-symbol"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">EXCELLENCE</h3>
                        <p>
                            Quality, excellence and high standards underpin the Hejaz philosophy. We promote
                            these values...
                        </p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'excellence']) }}"
                                class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span class="flaticon-layers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">SERVICE</h3>
                        <p>Staff and students at Hejaz understand the nature and complexity of today’s society ...</p>
                        <p><a href="{{ route('site.page.show' , ['page' => 'service']) }}" class="btn btn-primary">Read
                                more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter  img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about"
    style="background-image: url({{ asset('site/assets/cover2.png') }});background-repeat: no-repeat;background-size: 28%;background-position-y: bottom;background-position-x: right;">
    <div class="container ">
        <div class="row d-flex  ">
            <div class="col-lg-12 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome – Chairman</span>
                        <h2 class="mb-4">2021</h2>
                        <p>It is a great pleasure to welcome this outstanding group of educators to Al Hejaz
                            International School for the academic year 2021 – 2022.We are optimistic that you will soon
                            feel the sense of pride we share in belonging to this noble educational establishment.&nbsp;
                        </p>
                        <p>We believe that a great responsibility is laid on you to fortify the image of the school in
                            order to educate a new generation of our school and to offer them the opportunity for a
                            brilliant future. Therefore, we wish you all the best in your mission and we encourage you
                            to exert more effort to achieve our goals in the current developments of the school which
                            will consequently enable us to meet the highest standards of education. Remember, that “to
                            the world you may be just a teacher, but to your students, you are a HERO.&nbsp;</p>
                        <p>I would personally like to express my deep appreciation for your efforts.&nbsp;</p>
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
                <span class="subheading">Academic</span>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Kindergarten (KG1 to KG3)');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Kindergarten (KG1 to KG3)</h3>
                            <div class="faded">
                                <p>The education of our youngest learners is vitally important; it lays the foundation
                                    ...</p>
                                <a href="{{ route('site.page.show' , ['page' => 'kindergarten-kg1-to-kg3']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Primary School (G1 to G3)');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Primary School (G1 to G3)</h3>
                            <div class="faded">
                                <p>In the Primary School boys and girls are taught in separate classes.</p>
                                <a href="{{ route('site.page.show' , ['page' => 'primary-school-g1-to-g3']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Boys Middle School (G4 to G9)');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Boys Middle School (G4 to G9)</h3>
                            <div class="faded">
                                <p>In G4 to G8 boys are taught in a separate section of the building</p>
                                <a href="{{ route('site.page.show' , ['page' => 'boys-middle-school-g4-to-g8']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Girls Middle School (G4 to G8)');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Girls Middle School (G4 to G8)</h3>
                            <div class="faded">
                                <p>In G4 to G8 girls are taught in a separate section of the building</p>
                                <a href="{{ route('site.page.show' , ['page' => 'girls-middle-school-g4-to-g8']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Boys Upper School (G9 )');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Boys Upper School (G9)</h3>
                            <div class="faded">
                                <p>In G9 boys are taught in a separate section of the building</p>
                                <a href="{{ route('site.page.show' , ['page' => 'boys-upper-school-g9-to-g10']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                            style="background-image: url('https://dummyimage.com/800x400/dcdcda/000000.jpg&text=Girls Upper School (G9)');">
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div style="width: 100%">
                            <h3 class="mb-4">Girls Upper School (G9)</h3>
                            <div class="faded">
                                <p>The students in G9 are prepared thoroughly and we build on the information
                                    gathered from G6</p>
                                <a href="{{ route('site.page.show' , ['page' => 'girls-upper-school-g9-to-g10']) }}"
                                    class="btn btn-primary">Read more</a>
                            </div>
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
                    <p>
                        7458 Zuhayr Ibn Abi Salamah - Al Aziziyah Dist. <br>
                        Unit No 27 <br>
                        Jeddah 23342 - 2474 <br>
                        Kingdom of Saudi Arabia <br>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel:+966-12-6171000">+966-12-6171000</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:admin@alhejazschool.org">admin@alhejazschool.org</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="https://alhejazschool.org/">alhejazschool.org</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
