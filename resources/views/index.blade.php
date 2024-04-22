<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Three || Nisoz || HTML Template For Creative Agency</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Nisoz HTML Template For Creative Agency" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/nisoz-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/nisoz.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
<!---->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu main-menu-no-top">
                <div class="container-fluid">
                    <div class="main-menu__logo">
                        <a href="index.html">
                            <img src="assets/images/logo-light.png" width="96" height="34" alt="nisoz">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <div class="main-menu__nav">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="scrollToLink current"><a href="#home">INICIO</a></li>
                            <li class="scrollToLink"><a href="#services">Services</a></li>
                            <li class="scrollToLink"><a href="#about">About</a></li>
                            <li class="scrollToLink"><a href="#portfolio">NUESTROS PROFECIONALES</a></li>
                            <li class="scrollToLink"><a href="#blog">OFERTAS</a></li>
                            <li class="scrollToLink"><a href="#contact">SOPORTE TENICO</a></li>
                        </ul>
                    </div><!-- /.main-menu__nav -->
                    <div class="main-menu__right">
                        <a href="#" class="main-menu__toggler mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a><!-- /.mobile menu btn -->
                        <a href="#" class="main-menu__phone">
                            <i class="icon-telephone"></i>
                            <span class="main-menu__phone">75232232</span>
                        </a><!-- /.phone-number -->
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}" class="main-menu__cart cart-toggler">
                                <!--<i class="icon-magnifying-glass"></i>  class="main-menu__search search-toggler-->
                                Regresar
                            </a><!-- /.search btn -->
                            @else
                            <a href="{{ route('login') }}" class="main-menu__cart cart-toggler">
                                <!--<i class="icon-shopping-cart"></i>
                                <span class="main-menu__cart__count">0</span>-->
                                Ingresar
                            </a><!-- /.cart btn -->
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="main-menu__cart cart-toggler">Registrate</a>
                                @endif
                            @endauth
                        @endif

                    </div><!-- /.main-menu__right -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu main-menu-no-top">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Main Slider Start-->
        <section class="main-slider-three" id="home">
            <div class="main-slider-three__carousel nisoz-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"smartSpeed": 1000,
        "autoplay": true,
        "autoplayTimeout": 6000,
		"autoplayHoverPause": true,
		"nav": true,
        "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
                <div class="item">
                    <!-- slider item start -->
                    <div class="main-slider-three__item">
                        <!-- bg image start -->
                        <div class="main-slider-three__bg" style="background-image: url(assets/images/shapes/slider-3-bg-1.png);"></div>
                        <!-- bg image end -->
                        <div class="main-slider-three__shape-1">
                            <img src="assets/images/shapes/slider-3-shape-1.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-2">
                            <img src="assets/images/shapes/slider-3-shape-2.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-3">
                            <img src="assets/images/shapes/slider-3-shape-3.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-bg">
                            <img src="assets/images/backgrounds/slider-3-shape-1.jpg" alt="nisoz">
                        </div><!-- shape-backgorund -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-three__content">
                                        <h5 class="main-slider-three__sub-title">Welcome to creative agency</h5>
                                        <!-- slider-title -->
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title-anim">We’re Digital</span>
                                            <span class="main-slider-three__title-anim">Marketing</span>
                                            <span class="main-slider-three__title-anim">Agency</span>
                                        </h2><!-- slider-title -->
                                        <div class="main-slider-three__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                        <div class="main-slider-three__arrow"><img src="assets/images/shapes/slider-3-border.png" alt="nisoz"></div>
                                        <!-- /.arrow -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->

                <div class="item">
                    <!-- slider item start -->
                    <div class="main-slider-three__item">
                        <!-- bg image start -->
                        <div class="main-slider-three__bg" style="background-image: url(assets/images/shapes/slider-3-bg-1.png);"></div>
                        <!-- bg image end -->
                        <div class="main-slider-three__shape-1">
                            <img src="assets/images/shapes/slider-3-shape-1.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-2">
                            <img src="assets/images/shapes/slider-3-shape-2.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-3">
                            <img src="assets/images/shapes/slider-3-shape-3.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-bg">
                            <img src="assets/images/backgrounds/slider-3-shape-2.jpg" alt="nisoz">
                        </div><!-- shape-backgorund -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-three__content">
                                        <h5 class="main-slider-three__sub-title">Welcome to creative agency</h5>
                                        <!-- slider-title -->
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title-anim">We’re Digital</span>
                                            <span class="main-slider-three__title-anim">Marketing</span>
                                            <span class="main-slider-three__title-anim">Agency</span>
                                        </h2><!-- slider-title -->
                                        <div class="main-slider-three__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                        <div class="main-slider-three__arrow"><img src="assets/images/shapes/slider-3-border.png" alt="nisoz"></div>
                                        <!-- /.arrow -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
                <div class="item">
                    <!-- slider item start -->
                    <div class="main-slider-three__item">
                        <!-- bg image start -->
                        <div class="main-slider-three__bg" style="background-image: url(assets/images/shapes/slider-3-bg-1.png);"></div>
                        <!-- bg image end -->
                        <div class="main-slider-three__shape-1">
                            <img src="assets/images/shapes/slider-3-shape-1.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-2">
                            <img src="assets/images/shapes/slider-3-shape-2.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-3">
                            <img src="assets/images/shapes/slider-3-shape-3.png" alt="nisoz">
                        </div><!-- shape-one -->
                        <div class="main-slider-three__shape-bg">
                            <img src="assets/images/backgrounds/slider-3-shape-3.jpg" alt="nisoz">
                        </div><!-- shape-backgorund -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-three__content">
                                        <h5 class="main-slider-three__sub-title">Welcome to creative agency</h5>
                                        <!-- slider-title -->
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title-anim">We’re Digital</span>
                                            <span class="main-slider-three__title-anim">Marketing</span>
                                            <span class="main-slider-three__title-anim">Agency</span>
                                        </h2><!-- slider-title -->
                                        <div class="main-slider-three__btn">
                                            <a href="about.html" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Discover More</span>
                                            </a><!-- /.btn -->
                                        </div>
                                        <div class="main-slider-three__arrow"><img src="assets/images/shapes/slider-3-border.png" alt="nisoz"></div>
                                        <!-- /.arrow -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
            </div>
        </section>
        <!--Main Slider End-->
        <!-- Service Start -->
        <section class="service-three" id="services">
            <div class="service-three__bg" style="background-image: url(assets/images/shapes/service-bg-3.jpg);"></div>
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="100ms">
                    <div class="col-md-7">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">our services</h5>
                            <h2 class="section-title__title">what we’re offering to<br> our customers</h2>
                        </div><!-- section-title -->
                    </div>
                    <div class="col-md-5">
                        <p class="service-three__text">
                            Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut
                            labore et simply free text dolore magna aliqua lonm andhn.
                        </p>
                    </div>
                </div>
                <div class="row service-three__cus-row">
                    <div class="col-lg-2 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__icon">
                                <span class="icon-website-design"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-three__item__title">
                                <a href="website-designing.html">UI / UX<br> Creative Design</a>
                            </h3><!-- /.service-title -->
                            <a class="service-three__item__more" href="website-designing.html">Find More</a>
                        </div><!-- /.service-card-three -->
                    </div>
                    <div class="col-lg-2 wow fadeInUp" data-wow-delay="250ms">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__icon">
                                <span class="icon-website-development"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-three__item__title">
                                <a href="website-development.html">Visual<br> Graphic Design</a>
                            </h3><!-- /.service-title -->
                            <a class="service-three__item__more" href="website-development.html">Find More</a>
                        </div><!-- /.service-card-three -->
                    </div>
                    <div class="col-lg-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__icon">
                                <span class="icon-digital-marketing"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-three__item__title">
                                <a href="digital-marketing.html">Strategy<br> & Marketing</a>
                            </h3><!-- /.service-title -->
                            <a class="service-three__item__more" href="digital-marketing.html">Find More</a>
                        </div><!-- /.service-card-three -->
                    </div>
                    <div class="col-lg-2 wow fadeInUp" data-wow-delay="400ms">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__icon">
                                <span class="icon-mobile-application"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-three__item__title">
                                <a href="mobile-application.html">Content<br> Writting Skills</a>
                            </h3><!-- /.service-title -->
                            <a class="service-three__item__more" href="mobile-application.html">Find More</a>
                        </div><!-- /.service-card-three -->
                    </div>
                    <div class="col-lg-2 wow fadeInUp" data-wow-delay="450ms">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__icon">
                                <span class="icon-monitor"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-three__item__title">
                                <a href="website-designing.html">Web & App<br> Development</a>
                            </h3><!-- /.service-title -->
                            <a class="service-three__item__more" href="website-designing.html">Find More</a>
                        </div><!-- /.service-card-three -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Start -->
        <!-- About Start -->
        <section class="about-three" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-three__thumb wow fadeInLeft" data-wow-delay="300ms">
                            <!-- about thumb start -->
                            <div class="about-three__thumb__one">
                                <img src="assets/images/resources/about-3-1.jpg" alt="nisoz">
                                <div class="about-three__thumb__triangle">
                                    <span class="about-three__thumb__triangle-left"></span>
                                    <span class="about-three__thumb__triangle-right"></span>
                                </div>
                            </div>
                            <div class="about-three__thumb__two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                                <img src="assets/images/resources/about-3-2.jpg" alt="nisoz">
                            </div>
                        </div><!-- about thumb end -->
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-three__content">
                            <!-- about content start-->
                            <div class="section-title">
                                <div class="section-title__triangle">
                                    <span class="section-title__triangle-left"></span>
                                    <span class="section-title__triangle-right"></span>
                                </div>
                                <h5 class="section-title__tagline">Welcome to agency</h5>
                                <h2 class="section-title__title">are you ready to grow your business</h2>
                            </div><!-- section-title -->
                            <p class="about-three__text">
                                There are many variations of simply free text passages of available but the majority have
                                suffered alteration
                                in some form, by injected hum randomised words which don't slightly.
                            </p>
                            <div class="row">
                                <div class="col-xl-5 col-md-6">
                                    <div class="about-three__box">
                                        <div class="about-three__box__icon"><span class="icon-development-1"></span></div>
                                        <h4 class="about-three__box__title">Businesses <br>Growth</h4>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6">
                                    <div class="about-three__box about-three__box-ml10">
                                        <div class="about-three__box__icon"><span class="icon-social-media"></span></div>
                                        <h4 class="about-three__box__title">Marketing <br>Solution</h4>
                                    </div>
                                </div>
                            </div>
                            <ul class="about-three__lists">
                                <li><span class="fa fa-check-circle"></span>Refresing to get such a personal touch.</li>
                                <li><span class="fa fa-check-circle"></span>Duis aute irure dolor in reprehenderit in voluptate.
                                </li>
                            </ul>
                            <a href="about.html" class="nisoz-btn">
                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__text">Discover More</span>
                            </a><!-- /.btn -->
                        </div><!-- about content end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->
        <div class="client-carousel @@extraClassName">
            <div class="container">
                <h5 class="client-carousel__tilte"><span>1K+ Brands Trust Us</span></h5><!-- section-title -->
                <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand/brand-1-1.png" alt="nisoz">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <!-- Feature Start -->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__item">
                            <!-- feature-start -->
                            <div class="feature-two__thumb">
                                <img src="assets/images/resources/feature-1.jpg" alt="nisoz">
                            </div>
                            <div class="feature-two__normal">
                                <div class="feature-two__normal__icon"><span class="icon-right-arrow"></span></div>
                                <h3 class="feature-two__normal__title">Professional<br> development services</h3>
                            </div><!-- feature-normal-content -->
                            <div class="feature-two__hover">
                                <h3 class="feature-two__hover__title">Professional<br> development services</h3>
                                <p class="feature-two__hover__text">Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <a class="feature-two__hover__btn" href="services.html"><span class="icon-right-arrow"></span></a>
                            </div><!-- feature-hover-content -->
                        </div><!-- feature-end -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__item">
                            <!-- feature-start -->
                            <div class="feature-two__thumb">
                                <img src="assets/images/resources/feature-2.jpg" alt="nisoz">
                            </div>
                            <div class="feature-two__normal">
                                <div class="feature-two__normal__icon"><span class="icon-right-arrow"></span></div>
                                <h3 class="feature-two__normal__title">We grow<br> your businesses</h3>
                            </div><!-- feature-normal-content -->
                            <div class="feature-two__hover">
                                <h3 class="feature-two__hover__title">We grow<br> your businesses</h3>
                                <p class="feature-two__hover__text">Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <a class="feature-two__hover__btn" href="services.html"><span class="icon-right-arrow"></span></a>
                            </div><!-- feature-hover-content -->
                        </div><!-- feature-end -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__item">
                            <!-- feature-start -->
                            <div class="feature-two__thumb">
                                <img src="assets/images/resources/feature-3.jpg" alt="nisoz">
                            </div>
                            <div class="feature-two__normal">
                                <div class="feature-two__normal__icon"><span class="icon-right-arrow"></span></div>
                                <h3 class="feature-two__normal__title">Get free<br> business advices</h3>
                            </div><!-- feature-normal-content -->
                            <div class="feature-two__hover">
                                <h3 class="feature-two__hover__title">Get free<br> business advices</h3>
                                <p class="feature-two__hover__text">Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <a class="feature-two__hover__btn" href="services.html"><span class="icon-right-arrow"></span></a>
                            </div><!-- feature-hover-content -->
                        </div><!-- feature-end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->
        <!-- Call To Action Start -->
        <section class="cta-three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
            <div class="cta-three__bg jarallax-img" style="background-image: url(assets/images/backgrounds/cta-bg-3.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="section-title text-center">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h2 class="section-title__title">nisoz Solutions allows your<br> Business to Increase Productivity
                            </h2>
                        </div><!-- section-title -->
                        <a href="contact.html" class="nisoz-btn">
                            <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__text">Discover More</span>
                        </a><!-- /.btn -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End -->
        <!-- Feature Start -->
        <section class="feature-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">business growth</h5>
                            <h2 class="section-title__title">Ready to give a new<br> business look</h2>
                        </div><!-- section-title -->
                        <h4 class="feature-three__heading">Proin est lacus, sagittis lobortis iaculise get.</h4>
                        <p class="feature-three__text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form,
                            by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-three__box">
                                    <div class="feature-three__box__icon"><span class="icon-growth"></span></div>
                                    <h5 class="feature-three__box__title">Market Management</h5>
                                    <p class="feature-three__box__text">Lorem ipsum is not tex dolor sit amet, consectetur
                                        notted.</p>
                                </div><!-- icon-box -->
                            </div>
                            <div class="col-md-6">
                                <div class="feature-three__box">
                                    <div class="feature-three__box__icon"><span class="icon-increment"></span></div>
                                    <h5 class="feature-three__box__title">Business Analysis</h5>
                                    <p class="feature-three__box__text">Lorem ipsum is not tex dolor sit amet, consectetur
                                        notted.</p>
                                </div><!-- icon-box -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-three__circle nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 20, "speed": 700, "scale": 1 }'>
                                    <h5 class="feature-three__circle__text">Explore marketing Services</h5>
                                </div><!-- circle-box -->
                            </div>
                            <div class="col-md-6">
                                <div class="feature-three__thumb">
                                    <img src="assets/images/resources/feature-4.jpg" alt="nisoz">
                                </div><!-- feature-image -->
                            </div>
                            <div class="col-md-6">
                                <div class="feature-three__thumb">
                                    <img src="assets/images/resources/feature-5.jpg" alt="nisoz">
                                </div><!-- feature-image -->
                            </div>
                            <div class="col-md-6">
                                <div class="feature-three__circle feature-three__circle-two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 20, "speed": 700, "scale": 1 }'>
                                    <h5 class="feature-three__circle__text">Get a professional solutions</h5>
                                </div><!-- circle-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->
        <!-- Portfolio Start -->
        <section class="portfolio-one portfolio-one__home3" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">our completed works</h5>
                            <h2 class="section-title__title">Recent clients projects</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="assets/images/portfolio/portfolio-3-1.jpg" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website
                                            development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="assets/images/portfolio/portfolio-3-2.jpg" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website
                                            development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="assets/images/portfolio/portfolio-3-3.jpg" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website
                                            development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="assets/images/portfolio/portfolio-3-4.jpg" alt="nisoz" />
                            </div>
                            <div class="portfolio-one__hover">
                                <a class="portfolio-one__read-more" href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                <div class="portfolio-one__hover-bottom">
                                    <div class="portfolio-one__cats"><a href="portfolio.html">Creative</a></div>
                                    <h3 class="portfolio-one__title"><a href="portfolio-details.html">Technology website
                                            development</a></h3>
                                </div>
                            </div>
                        </div><!-- folio-item -->
                    </div>
                </div><!-- slider-end -->
            </div>
        </section>
        <!-- Portfolio End -->
        <!-- Choose Start -->
        <section class="choose-two">
            <div class="choose-two__bg wow slideInRight" data-wow-delay="200ms"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="200ms">
                        <div class="nisoz-stretch-element-inside-column">
                            <div class="choose-two__thumb">
                                <img src="assets/images/resources/choose-2.jpg" alt="ogency">
                                <div class="choose-two__content wow fadeInUp" style="background-image: url(assets/images/shapes/choose.png);" data-wow-delay="700ms">
                                    <div class="choose-two__content__icon"><span class="icon-trophy"></span></div>
                                    <h4 class="choose-two__content__title">Award winning<br> top level web<br> agency</h4>
                                </div><!-- choose-content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">agency benefits</h5>
                            <h2 class="section-title__title">why you should choose our nisoz agency</h2>
                        </div><!-- section-title -->
                        <div class="choose-two__box">
                            <div class="choose-two__box__icon"><span class="icon-team"></span></div>
                            <h5 class="choose-two__box__title">the largest agency</h5>
                            <p class="choose-two__box__text">Aenean placerat ut lacus nec simply free pulvinar. Donec eu leo,
                                ante at, commodo diam.</p>
                        </div><!-- icon-box -->
                        <div class="choose-two__box">
                            <div class="choose-two__box__icon"><span class="icon-good-quality"></span></div>
                            <h5 class="choose-two__box__title">high quality products</h5>
                            <p class="choose-two__box__text">Aenean placerat ut lacus nec simply free pulvinar. Donec eu leo,
                                ante at, commodo diam.</p>
                        </div><!-- icon-box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose End -->
        <!-- Blog Start -->
        <section class="blog-one" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="section-title text-center">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">From the Blog</h5>
                            <h2 class="section-title__title">News & articles</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="Five ways that can develop your business">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="assets/images/blog/author-1.png" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Five ways that can develop your business</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="Get a few solutions to hire a best candidate">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="assets/images/blog/author-1.png" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Get a few solutions to hire a best candidate</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="Introducing the latest tech features for you">
                                <a href="blog-details-right.html"></a>
                                <div class="blog-one__date">
                                    <span>30</span>
                                    June, 2023
                                </div><!-- /.blog-date -->
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <div class="blog-one__meta__author">
                                        <div class="blog-one__meta__thumb"><img src="assets/images/blog/author-1.png" alt="nisoz" /></div>
                                        by<br><a href="blog-list-right.html">Layerdrops</a>
                                    </div>
                                    <span class="fas fa-comments"></span>2 Comments
                                </div><!-- /.blog-meta -->
                                <h3 class="blog-one__title">
                                    <a href="blog-details-right.html">Introducing the latest tech features for you</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-details-right.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
        <!-- Contact Start -->
        <section class="contact-two" id="contact">
            <div class="contact-two__bg" style="background-image: url(assets/images/shapes/contact-bg-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">contact with us</h5>
                            <h2 class="section-title__title">Let’s work together</h2>
                        </div><!-- section-title -->
                        <div class="contact-two__box">
                            <div class="contact-two__box__icon"><span class="icon-phone-call"></span></div>
                            <h5 class="contact-two__box__title">Have question?</h5>
                            <p class="contact-two__box__text">Free <a href="tel:230009850">+23 (000)-9850</a></p>
                        </div><!-- icon-box -->
                        <div class="contact-two__box">
                            <div class="contact-two__box__icon"><span class="icon-mailbox"></span></div>
                            <h5 class="contact-two__box__title">Send email</h5>
                            <p class="contact-two__box__text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                        </div><!-- icon-box -->
                        <div class="contact-two__box">
                            <div class="contact-two__box__icon"><span class="icon-maps-and-flags"></span></div>
                            <h5 class="contact-two__box__title">Visit anytime</h5>
                            <p class="contact-two__box__text">30 broklyn golden street. New York</p>
                        </div><!-- icon-box -->
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-two__form-box wow fadeInRight" data-wow-delay="300ms">
                            <form action="assets/inc/sendemail.php" class="contact-two__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-two__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-two__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-two__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Select service</option>
                                                <option value="1">Select service 01</option>
                                                <option value="2">Select service 02</option>
                                                <option value="3">Select service 03</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-two__input-box text-message-box">
                                            <textarea name="message" placeholder="Write Comment"></textarea>
                                        </div>
                                        <div class="contact-two__btn-box">
                                            <button type="submit" class="nisoz-btn">
                                                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                                <span class="nisoz-btn__text">Send a message</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                        <div class="contact-two__thumb wow fadeInUp" data-wow-delay="400ms">
                            <img src="assets/images/resources/contact-3.png" alt="nisoz" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

        <footer class="main-footer">
            <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1.png);"></div>
            <div class="container">
                <div class="main-footer__top wow fadeInUp" data-wow-delay="100ms">
                    <a href="index.html" class="main-footer__logo">
                        <img src="assets/images/footer-logo.png" alt="nisoz" width="96" height="34">
                    </a><!-- /.footer-logo -->
                    <div class="main-footer__social">
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-social -->
                </div><!-- footer-top -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="main-footer__navmenu">
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Meet Our Team</a></li>
                                <li><a href="services.html">What We Offer</a></li>
                                <li><a href="blog-grid-right.html">Latest News</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-menu -->
                    </div>
                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="main-footer__navmenu">
                            <ul>
                                <li><a href="faq.html">Faqs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="portfolio.html">Recent Work</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-menu -->
                    </div>
                    <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                        <div class="main-footer__about">
                            <p class="main-footer__about__text">36 broklyn golden street. New<br> York. USA</p>
                            <ul class="main-footer__about__info">
                                <li><span class="fas fa-phone-square"></span><a href="tel:+923680006800">+92 (3680) 00 - 6800</a></li>
                                <li><span class="fas fa-envelope"></span><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                            </ul>
                        </div><!-- /.footer-about -->
                    </div>
                    <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="500ms">
                        <div class="main-footer__newsletter">
                            <h5 class="main-footer__newsletter__text">Subscribe to get latest updates on daily basis</h5>
                            <form class="main-footer__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                                <div class="main-footer__email-input-box">
                                    <input type="email" placeholder="Email address" name="EMAIL">
                                </div>
                                <button type="submit" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Subscribe</span>
                                </button>
                            </form>
                            <div class="mc-form__response"></div>
                        </div><!-- /.footer-mailchimp -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.main-footer -->

        <section class="copyright text-center">
            <div class="container wow fadeInUp" data-wow-delay="500ms">
                <p class="copyright__text">© Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> by <a href="index.html">Nisoz Template</a></p>
            </div><!-- /.container -->
        </section><!-- /.copyright -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="96" height="34" alt="nisoz" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9236809850">+92 (3680) - 9850</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="nisoz-btn">
                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                    <span class="nisoz-btn__text"><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->


    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="assets/js/nisoz.js"></script>
</body>

</html>