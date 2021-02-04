<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('site/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">
                <img class="logo" alt="logo" src="{{ asset('site/assets/logo.png') }}" width="60px">
                <span>Alhejaz School</span>
            </a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="about"><span>About</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"
                            data-nav-section="projects"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="team"><span>Team</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"
                            data-nav-section="testimony"><span>Testimony</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="blog"><span>Blog</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"
                            data-nav-section="contact"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Al-Hejaz International School</h2>
                        <p style="font-size: 13px">Al Hejaz is an international school based in Jeddah. The School is licensed by
                            the Saudi Arabian Ministry of Education and delivers a British Curriculum. The language
                            of education within the school is English.</p>
                        <p style="font-size: 13px">As part of its commitment to support the strengthening of Saudi identity and
                            Islamic ethos, and in keeping with Ministry of Education rules, the school also delivers
                            Arabic, Islamic studies, the History and Geography of the Saudi Kingdom and Quran
                            lessons in the Arabic language.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Girls Section</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">
                                        <address>
                                            Al-Hejaz International School (Jeddah)
                                            PO BOX 4100 JEDDAH 21491<br>
                                            Kingdom of Saudi Arabia (KSA)<br>
                                            Fax: +966-2-6717090<br>
                                        </address>

                                    </span>
                                </li>
                                <li><a href="tel:+966-2-6171000"><span class="icon icon-phone"></span>
                                        <span class="text">+966-2-6171000</span>
                                    </a></li>
                                <li>
                                    <a href="info@alhejazschool.org">
                                        <span class="icon icon-envelope"></span>
                                        <span class="text">info@alhejazschool.org</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Boys Section</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">
                                        <address>
                                            Al-Hejaz International School (Jeddah)
                                            PO BOX 4100 JEDDAH 21491<br>
                                            Kingdom of Saudi Arabia (KSA)<br>
                                            Fax: +966-2-6717090<br>
                                        </address>

                                    </span>
                                </li>
                                <li><a href="tel:+966-2-6171000"><span class="icon icon-phone"></span>
                                        <span class="text">+966-2-6171000</span>
                                    </a></li>
                                <li>
                                    <a href="info@alhejazschool.org">
                                        <span class="icon icon-envelope"></span>
                                        <span class="text">info@alhejazschool.org</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/js/aos.js') }}"></script>
    <script src="{{ asset('site/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('site/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('site/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @yield('js')

    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    @if(session()->has('success'))
    Toast.fire({
        type: 'success',
        title: '{{ session("success") }}'
    })
    @endif

    @if(session()->has('failed'))
    Toast.fire({
        type: 'error',
        title: '{{ session("failed") }}'
    })
    @endif
    </script>
</body>

</html>
