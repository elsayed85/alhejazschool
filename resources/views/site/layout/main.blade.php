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
                <span>{{ config('app.name') }}</span>
            </a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link" @if(\Request::route()->getName() == 'site.home')
                            data-nav-section="home"
                            @else onclick="location.replace('{{ route('site.home') }}')"
                            @endif>
                            <span>Home</span></a></li>
                    <li class="nav-item"><a href="{{ route('site.page.show' , ['page' => 'about']) }}"
                            onclick="location.replace('{{ route('site.page.show' , ['page' => 'about']) }}')"
                            class="nav-link"><span>About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('site.page.show' , ['page' => 'boys']) }}"
                            onclick="location.replace('{{ route('site.page.show' , ['page' => 'boys']) }}')"
                            class="nav-link"><span>Boys
                                Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('site.page.show' , ['page' => 'girls']) }}"
                            onclick="location.replace('{{ route('site.page.show' , ['page' => 'girls']) }}')"
                            class="nav-link"><span>Girls Section</span></a></li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" @if(\Request::route()->getName() == 'site.home')
                            data-nav-section="contact" @else
                            onclick="location.replace('{{ route('site.contact_us.index') }}')"
                            @endif><span>Contact</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <ul>
                        <li id="menu-item-896"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-896"
                            aria-haspopup="true"><a href="https://alhejazsite.wordpress.com/his/">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-921"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-921"><a
                                        href="{{ route('site.page.show' , ['page' => "mission-vision-and-ethos"]) }}">Mission,
                                        Vision and Ethos</a></li>
                                <li id="menu-item-923"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-923"><a
                                        href="{{ route('site.page.show' , ['page' => "welcome-from-the-chairman"]) }}">Welcome
                                        From The Chairman</a></li>
                                <li id="menu-item-922"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-922"><a
                                        href="{{ route('site.page.show' , ['page' => "welcome-from-the-principal"]) }}">Welcome
                                        From The Principal</a></li>
                                <li id="menu-item-964"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-964"><a
                                        href="{{ route('site.page.show' , ['page' => "schools-general-calendar"]) }}">School’s
                                        General Calendar</a></li>
                                <li id="menu-item-1507"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1507"><a
                                        href="{{ route('site.page.show' , ['page' => "student-handbook"]) }}">Student
                                        Handbook</a>
                                </li>
                                <li id="menu-item-1508"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1508"><a
                                        href="{{ route('site.page.show' , ['page' => "annual-school-fees-for-2020-2021"]) }}">Annual
                                        School Fees for 2020-2021</a></li>
                                <li id="menu-item-937"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-937"><a
                                        href="{{ route('site.page.show' , ['page' => "application-form"]) }}">Recruitment</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li id="menu-item-906"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-906"
                            aria-haspopup="true"><a href="{{ route('site.page.show' , ['page' => "boys"]) }}">Boys
                                Section</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1001"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a
                                        href="{{ route('site.page.show' , ['page' => "about-boys-section"]) }}">About
                                        Boys
                                        Section</a></li>
                                <li id="menu-item-976"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976"><a
                                        href="{{ route('site.page.show' , ['page' => "parents-dashboard"]) }}">Parents
                                        Dashboard</a></li>
                                <li id="menu-item-972"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-972"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-weekly-plan"]) }}">Boys
                                        Weekly Plan</a>
                                </li>
                                <li id="menu-item-919"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-middle-school-g4-to-g8"]) }}">Intermediate
                                        Section</a></li>
                                <li id="menu-item-918"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-918"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-upper-school-g9-to-g10"]) }}">Secondary
                                        Section</a></li>
                                <li id="menu-item-971"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971"><a
                                        href="{{ route('site.page.show' , ['page' => "girls-weekly-plan"]) }}">Parents
                                        Council</a>
                                </li>
                                <li id="menu-item-970"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-970"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-student-council"]) }}">Student
                                        Council</a></li>
                                <li id="menu-item-966"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-966"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-activities-gallery"]) }}">Boys
                                        Activities
                                        Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li id="menu-item-916"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-916"
                            aria-haspopup="true"><a
                                href="{{ route('site.page.show' , ['page' => "kindergarten-kg1-to-kg3"]) }}">KG
                                Section</a>
                            <ul class="sub-menu">
                                <li id="menu-item-917"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-917"><a
                                        href="{{ route('site.page.show' , ['page' => "kindergarten-kg1-to-kg3"]) }}">About
                                        KG Section</a></li>
                                <li id="menu-item-995"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-995"><a
                                        href="{{ route('site.page.show' , ['page' => "parents-dashboard"]) }}">Parents
                                        Dashboard</a></li>
                                <li id="menu-item-994"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a
                                        href="{{ route('site.page.show' , ['page' => "kg-weekly-plan"]) }}">KG Weekly
                                        Plan</a></li>
                                <li id="menu-item-993"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a
                                        href="{{ route('site.page.show' , ['page' => "kg-events-calendar"]) }}">KG
                                        Events
                                        Calendar</a></li>
                                <li id="menu-item-992"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-992"><a
                                        href="{{ route('site.page.show' , ['page' => "kg-activities-gallery"]) }}">KG
                                        Activities
                                        Gallery</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li id="menu-item-905"
                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-905"
                            aria-haspopup="true"><a href="{{ route('site.page.show' , ['page' => "girls"]) }}">Girls
                                Section</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1000"
                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-998 current_page_item menu-item-1000">
                                    <a href="{{ route('site.page.show' , ['page' => "about-girls-section"]) }}"
                                        aria-current="page">About Girls Section</a></li>
                                <li id="menu-item-973"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-973"><a
                                        href="{{ route('site.page.show' , ['page' => "parents-dashboard"]) }}">Parents
                                        Dashboard</a></li>
                                <li id="menu-item-979"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-979"><a
                                        href="{{ route('site.page.show' , ['page' => "girls-weekly-plan-2"]) }}">Girls
                                        Weekly
                                        Plan</a></li>
                                <li id="menu-item-975"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-975"><a
                                        href="{{ route('site.page.show' , ['page' => "primary-school-g1-to-g3"]) }}">Primary
                                        Section</a></li>
                                <li id="menu-item-974"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-974"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-middle-school-g4-to-g8"]) }}">Intermediate
                                        Section</a></li>
                                <li id="menu-item-920"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-920"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-upper-school-g9-to-g10"]) }}">Secondary
                                        section</a></li>
                                <li id="menu-item-980"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980"><a
                                        href="{{ route('site.page.show' , ['page' => "girls-weekly-plan"]) }}">Parents
                                        Council</a>
                                </li>
                                <li id="menu-item-1499"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1499"><a
                                        href="{{ route('site.page.show' , ['page' => "boys-student-council"]) }}">Student
                                        Council</a></li>
                                <li id="menu-item-965"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965"><a
                                        href="{{ route('site.page.show' , ['page' => "girls-activity-gallery"]) }}">Girls
                                        Activities Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Al-Hejaz International School</h2>
                        <p style="font-size: 13px">Al Hejaz is an international school based in Jeddah. The School is
                            licensed by
                            the Saudi Arabian Ministry of Education and delivers a British Curriculum. The language
                            of education within the school is English.</p>
                        <p style="font-size: 13px">As part of its commitment to support the strengthening of Saudi
                            identity and
                            Islamic ethos, and in keeping with Ministry of Education rules, the school also delivers
                            Arabic, Islamic studies, the History and Geography of the Saudi Kingdom and Quran
                            lessons in the Arabic language.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://twitter.com/alhejazS"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.snapchat.com/add/alhejaz.sc"><span
                                        class="icon-snapchat"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/alhejaz.sc.7"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/alhejazinternational.sc/"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('site.home') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="{{ route('site.page.show' , ['page' => 'about']) }}"><span
                                        class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="{{ route('site.page.show' , ['page' => 'boys']) }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Boys Section</a></li>
                            <li><a href="{{ route('site.page.show' , ['page' => 'girls']) }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Girls Section</a></li>
                            <li><a href="{{ route('site.contact_us.index') }}"><span
                                        class="icon-long-arrow-right mr-2"></span>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">
                                        <address>
                                            7458 Zuhayr Ibn Abi Salamah - Al Aziziyah Dist. <br>
                                            Unit No 27 <br>
                                            Jeddah 23342 - 2474 <br>
                                            Kingdom of Saudi Arabia <br>
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
