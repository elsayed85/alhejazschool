@extends('site.layout.main')
@section('title' , "Contact Us")
@section('main')

<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset('site/assets/cover.png') }}');background-position: 50% 28%">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('site.home') }}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="#">Pages <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Contact Us <i class="ion-ios-arrow-forward"></i></span>
                </p>
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


@endsection
