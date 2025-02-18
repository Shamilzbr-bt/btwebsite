<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ex-coders">
    <meta name="description" content="Extech - IT Solution & Technology HTML Template">
    <!-- ======== Page title ============ -->
    <title>BlockTech</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
        .hero-3 .slider-image::before {
            /* background: linear-gradient(270deg, rgba(4, 170, 109, 0) 14.74%, #0aa471 70.82%); */
            background: linear-gradient(270deg, rgba(4, 170, 109, 0) 14.74%, #2e7369 70.82%);
        }

        .header-top-section {
            /* background-color: #e56a40; */
            background-color: black;
            padding: 6px 0;
        }

        .footer-bg {
            background-color: black !important;
        }

        .header-main .main-menu ul li a {
            font-size: 15px;
            padding: 20px 16px;
        }

        .header-main .main-menu ul li .submenu li a {
            font-size: 13px;
            padding: 7px 10px;
        }

        .section-padding {
            padding: 60px 0;
        }

        .widget.widget_nav_menu.footer-widget .menu-all-pages-container .menu li a {
            font-size: 14px;
        }
        

        /* Menu scroll bar */

		ul.submenu {
			max-height: 400px;
			/* Adjust this value based on your design */
			overflow-y: auto;
			overflow-x: hidden;
			/* Prevent horizontal scrolling */
		}

		ul.submenu::-webkit-scrollbar {
			display: none;
		}


        /* .gt-widget-about .about-text {
            font-size: 14px;
        } */

        /* .copyright-wrap {
            background-color: #2e7369;
        } */
    </style>
</head>

<body>


    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="H" class="letters-loading">
                    H
                </span>
            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <!-- <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div> -->

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/BLOCKTECH_logo1.png" alt="">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <p class="text d-none d-lg-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p> -->
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Dasman Complex, Ahmad Al Jaber Street, Sharq, Kuwait</a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">
                                        AMB House, Chembumukku, Ernakulam, Kerala, India</a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="#"><span
                                            class="mailto:info@example.com">info@blocktech.com.kw</span></a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="#">
                                        +96522211226</a>
                                </div>
                            </li>
                        </ul>

                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header>

        <div id="header-sticky" class="header-3" style="margin: -10px;">

            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="#" class="header-logo">
                                    <img src="assets/img/logo/BLOCKTECH_logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.php">About</a>
                                            </li>
                                            <li>
                                                <a href="news.html">
                                                    Solutions
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Process Automation & RPA</a></li>
                                                    <li><a href="#">Document Management Solutions</a></li>
                                                    <li><a href="#">Digital Transformation Consultancy</a></li>
                                                    <li><a href="#">Omni Channel Contact Center</a></li>
                                                    <li><a href="#">Cloud CRM</a></li>
                                                    <li><a href="#">Cloud PBX & IP Telephony</a></li>
                                                    <li><a href="#">Retail Analytics & BI</a></li>
                                                    <li><a href="#">e-Signature</a></li>
                                                    <li><a href="#">Cloud Migration</a></li>
                                                    <li><a href="#">WhatsApp API Integration</a></li>
                                                    <li><a href="#">Application Development</a></li>
                                                    <li><a href="#">System Integrations</a></li>
                                                    <li><a href="#">Property Management Solution</a></li>
                                                    <li><a href="#">Omni Channel Business Communications</a></li>
                                                    <li><a href="#">Hospitality Solutions</a></li>
                                                    <li><a href="#">Information Security</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="news.html">
                                                    Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="project.html">
                                                            ABBYY
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="">ABBYY_Timeline</a></li>
                                                            <li><a href="">ABBYY_FlexiCapture</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="">Bitrix24</a></li>
                                                    <li><a href="">CFLOW DMS</a></li>
                                                    <li><a href="">Yanolja Cloud</a></li>
                                                    <li><a href="">Kaleyra</a></li>
                                                    <li><a href="">Gupshup</a></li>
                                                    <li><a href="">PIX RPA</a></li>
                                                    <li><a href="">eXertERP</a></li>
                                                    <li><a href="">ZOHO</a></li>
                                                    <li><a href="">SECPOINT</a></li>
                                                    <li><a href="">Footfallcam</a></li>
                                                    <li><a href="">Fanvil</a></li>
                                                    <li><a href="">MS Power BI</a></li>
                                                    <li><a href="">AWS Cloud</a></li>
                                                    <li><a href="">Google Cloud</a></li>
                                                    <li><a href="">BT SMS Gateway</a></li>
                                                    <li><a href="">3CX IP PBX</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Industries
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="">Retail</a></li>
                                                    <li><a href="">Pharmaceuticals</a></li>
                                                    <li><a href="">Corporates</a></li>
                                                    <li><a href="">Hospitality</a></li>
                                                    <li><a href="">Healthcare</a></li>
                                                    <li><a href="">Automotive</a></li>
                                                    <li><a href="">Travel & Tourism</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> -->
                            <!-- <div class="header-button">
                                <a href="#" class="theme-btn bg-white">
                                    <span>
                                        get A Quote
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div> -->
                            <div class="header__hamburger d-lg-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <!-- <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- Hero Section Start -->
    <section class="hero-section fix hero-3">
        <div class="bottom-shape">
            <img src="assets/img/hero/bottom-shape.png" alt="shape-img">
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-2.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <!-- <img src="assets/img/hero/mask-shape-2.png" alt="shape-img"> -->
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/hero/border-shape.png" alt="shape-img"> -->
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <!-- <img src="assets/img/choose/circle.png" alt="shape-img"> -->
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/frame.png" alt="shape-img"> -->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <!-- <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">best it
                                        company</h5> -->
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Trusted IT & <br>
                                        Tech Services
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        Your Partner in Seamless, Secure and Scalable Solutions
                                    </p>
                                    <div class="hero-button">
                                        <a href="#" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
                                        </a>
                                        <a href="#" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-1.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <!-- <img src="assets/img/hero/mask-shape-2.png" alt="shape-img"> -->
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/hero/border-shape.png" alt="shape-img"> -->
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <!-- <img src="assets/img/choose/circle.png" alt="shape-img"> -->
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/frame.png" alt="shape-img"> -->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <!-- <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">best it
                                        company</h5> -->
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Trusted IT & <br>
                                        Tech Services
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        Your Partner in Seamless, Secure and Scalable Solutions
                                    </p>
                                    <div class="hero-button">
                                        <a href="#" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="#" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/hero-3.jpg');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <!-- <img src="assets/img/hero/mask-shape-2.png" alt="shape-img"> -->
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/hero/border-shape.png" alt="shape-img"> -->
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <!-- <img src="assets/img/choose/circle.png" alt="shape-img"> -->
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <!-- <img src="assets/img/frame.png" alt="shape-img"> -->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <!-- <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">best it
                                        company</h5> -->
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Trusted IT & <br>
                                        Tech Services
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        Your Partner in Seamless, Secure and Scalable Solutions
                                    </p>
                                    <div class="hero-button">
                                        <a href="#" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="#  " data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn border-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="about-image">
                            <!-- <div class="shape-image">
                                <img src="assets/img/about/shape.png" alt="shape-img">
                            </div> -->
                            <div class="circle-shape">
                                <img src="assets/img/about/circle.png" alt="shape-img">
                            </div>
                            <img src="assets/img/about/about.png" alt="about-img">
                            <!-- <div class="video-box">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                    class="video-btn ripple popup-video">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title mxw-650">
                                <!-- <div class="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span>ABOUT
                                        BLOCKTECH
                                    </span><img src="assets/img/icon/arrowRight.svg" alt="icon">
                                </div> -->
                                <h2 class="title">Your Technology Partner in Success</h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                BlockTech brings more agility and flexibility into your business model by delivering superior IT services that encompass the applications, network & communications, data center, cloud services, end-user support and customer contact centers.
                            </p>

                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="about.html" class="theme-btn">
                                        Explore More
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <div class="author-icon wow fadeInUp" data-wow-delay=".9s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us Now</span>
                                        <h5>
                                            <a href="#">+96522211226</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    <section class="service-section-3 pb-0 fix section-padding bg-cover"
        style="background-image: url('assets/img/service/service-bg-3.jpg');">
        <div class="container">
            <div class="row d-flex align-items-end justify-content-between mb-20">
                <div class="col-xl-7">
                    <div class="section-title mxw-650">
                        <div class="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Our Services
                            </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                        <h2 class="title"> We Solve IT Problems With Technology</h2>

                    </div>
                </div>

                <div class="col-xl-5 d-flex align-items-end justify-content-end">
                    <div class="btn-wrapper" data-wow-delay=".9s">
                        <a href="service.html" class="theme-btn"> See all Services <i
                                class="fa-solid fa-arrow-right-long"></i> </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/img/service/business.jpg" alt="service-img">
                        </div>
                        <div class="icon-2">
                            <img src="assets/img/service/icon/s-icon-1.svg" alt="img">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/img/service/icon/s-icon-1.svg" alt="img">
                            </div>
                            <h4>
                                <a href="service-details.html">Business Communications</a>
                            </h4>
                            <p>
                                accumsan. Pellentesque in magna tincidunt, this is.
                            </p>
                            <a href="service-details.html" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/img/service/digital.jpg" alt="service-img">
                        </div>
                        <div class="icon-2">
                            <img src="assets/img/service/icon/s-icon-2.svg" alt="img">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/img/service/icon/s-icon-2.svg" alt="img">
                            </div>
                            <h4>
                                <a href="service-details.html">Digital Transformation</a>
                            </h4>
                            <p>
                                accumsan. Pellentesque in magna tincidunt, this is.
                            </p>
                            <a href="service-details.html" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/img/service/crm.jpg" alt="service-img">
                        </div>
                        <div class="icon-2">
                            <img src="assets/img/service/icon/s-icon-4.svg" alt="img">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/img/service/icon/s-icon-5.svg" alt="img">
                            </div>
                            <h4>
                                <a href="service-details.html">Contact Center & CRM</a>
                            </h4>
                            <p>
                                accumsan. Pellentesque in magna tincidunt, this is.
                            </p>
                            <a href="service-details.html" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/img/service/services.jpg" alt="service-img">
                        </div>
                        <div class="icon-2">
                            <img src="assets/img/service/icon/s-icon-3.svg" alt="img">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/img/service/icon/s-icon-3.svg" alt="img">
                            </div>
                            <h4>
                                <a href="service-details.html">Professional Services</a>
                            </h4>
                            <p>
                                accumsan. Pellentesque in magna tincidunt, this is.
                            </p>
                            <a href="service-details.html" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-banner-2 section-padding">
            <div class="container">
                <div class="cta-wrapper-2 border-radius">
                    <h3>
                        Stay Connected With <br> Cutting Edge IT
                    </h3>
                    <div class="author-icon">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content">
                            <span>Call Us Now</span>
                            <h4>
                                <a href="#">+96522211226</a>
                            </h4>
                        </div>
                    </div>
                    <a href="contact.html" class="theme-btn bg-white">
                        get A Quote
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section Start -->
    <section class="work-process-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title title-area  mx-auto mb-25">
                <div class="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg"
                        alt="icon"> <span> How IT work
                    </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                <h2 class="title text-center">Standard Work Process</h2>
            </div>

            <div class="process-work-wrapper">
                <div class="line-shape">
                    <img src="assets/img/process/linepng.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/img/process/01.svg" alt="img">
                                <h6 class="number">
                                    1
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Choose A Service</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Define Requirements</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/img/process/02.svg" alt="img">
                                <h6 class="number">
                                    2
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/img/process/03.svg" alt="img">
                                <h6 class="number">
                                    3
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Request A Meeting</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Final Solution</h4>
                                <p>
                                    In a free hour, when our power of choice is untrammeled and
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/img/process/04.svg" alt="img">
                                <h6 class="number">
                                    4
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Section Start -->
    <section class="achievement-section-3 fix section-bg-2">
        <div class="shape-image">
            <img src="assets/img/achiv-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="achievement-wrapper style-2">
                <div class="section-title mxw-560">
                    <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"> <img
                            src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span class="text-white"> achievement
                        </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                    <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s"> We Are Increasing Business Success
                    </h2>
                </div>

                <div class="counter-area">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/01.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">700</span>+</h2>
                            <p>COMPLETED PROJECTS</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/02.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">400</span>+</h2>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/03.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">17618</span>+</h2>
                            <p>USERS</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <img src="assets/img/achievement-icon/04.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="counter-number">17</span>+</h2>
                            <p>SMART SOLUTIONS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Slider Section    S T A R T -->
    <div class="brand-slider-section fix">
        <div class="brand-slider-container-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="slider-area brandSliderOne">
                        <div class="swiper gt-slider" id="brandSliderOne"
                            data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":3},"992":{"slidesPerView":4},"1200":{"slidesPerView":5}}}'>

                            <div class="section-title title-area  mx-auto mb-10">
                                <!-- <div class="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Our Clients </span><img src="assets/img/icon/arrowRight.svg" alt="icon">
                                </div> -->
                                <h2 class="title text-center pb-5" style="color: #0aa471;">Our Clients</h2>
                            </div>

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/01.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/02.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/03.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/04.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/01.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/02.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/02.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/03.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/04.png" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand/01.png" alt="brandLogo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Service Section Start -->
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="section-title title-area  mx-auto mb-20">
                <h2 class="title text-center" style="color: #0aa471;"> Our Partners </h2>
            </div>
            <div class="service-wrapper mb-0">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box-items box-shadow" style="width: 200px;">
                            <div class="icons">
                                <img src="assets/img/partners/Alfresco.png">
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box-items box-shadow" style="width: 200px;">
                            <div class="icons">
                                <img src="assets/img/partners/Alfresco.png">
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box-items box-shadow" style="width: 200px;">
                            <div class="icons">
                                <img src="assets/img/partners/Alfresco.png">
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box-items box-shadow" style="width: 200px;">
                            <div class="icons">
                                <img src="assets/img/partners/Alfresco.png">
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box-items box-shadow" style="width: 200px;">
                            <div class="icon">
                                <img src="assets/img/service/icon/s-icon-1.svg" alt="icon-img">
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!--<< Footer Section Start >>-->
    <footer class="footer-section footer-bg">
        <div class="widget-area style1 footer-bg pb-40" style="padding-top: -80px;">
            <div class="container">
                <div class="footer-layout style1">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="widget footer-widget wow fadeInUp" data-wow-delay=".6s">
                                <div class="gt-widget-about">
                                    <div class="about-logo">
                                        <a href="#"><img src="assets/img/logo/logo.png"></a>
                                    </div>
                                    <p class="about-text" style="line-height: 26px; text-align:justify; width: 212px;     font-size: 14px;">
                                        BlockTech offers agile, flexible IT services across applications, networks, data centers, cloud, end-user support and customer contact centers.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">
                                <h3 class="widget_title" style="color: #df582b;">Services</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>Digital Transformation</a>
                                        </li>
                                        <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>Business Communications</a>
                                        </li>
                                        <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>Contact Center & CRM</a>
                                        </li>
                                        <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>Professional Services</a></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">
                                <h3 class="widget_title" style="color: #df582b;">Location</h3>
                                <div class="checklist style2">
                                    <ul class="ps-0" style="margin-bottom: 5px; font-size: 14px;">
                                        <li class="text-white"><i class="fa-sharp fa-light fa-location-dot" style="color: #df582b;"></i></li>
                                        <li class="text-white">KUWAIT</li>
                                    </ul>
                                    <p class="pl-20 text-white" style="font-size: 14px;">Dasman Complex, Ahmad Al Jaber Street, Sharq, Kuwait</p>
                                    <br>
                                    <ul class="ps-0" style="margin-bottom: 5px; font-size: 14px;">
                                        <li class="text-white"><i class="fa-sharp fa-light fa-location-dot" style="color: #df582b;"></i></li>
                                        <li class="text-white">INDIA</li>
                                    </ul>
                                    <p class="pl-20 text-white" style="font-size: 14px;">ABM House, Chembumukku,
                                        Ernakulam, Kerala,
                                        India</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">
                                <h3 class="widget_title" style="color: #df582b;">Reach Us Out</h3>
                                <div class="checklist style2">
                                    <ul class="ps-0">
                                        <li class="text-white"><i class="fa-solid fa-envelope" style="color: #df582b;"></i></li>
                                        <li class="text-white" style="font-size: 14px;">info@blocktech.com.kw</li>
                                    </ul>
                                    <ul class="ps-0">
                                        <li class="text-white"><i class="fa-solid fa-phone" style="color: #df582b;"></i></li>
                                        <li class="text-white" style="font-size: 14px;">+965-22211226</li>
                                    </ul>

                                    <div class="gt-social style2 pl-10 pt-20">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="copyright-wrap bg-theme">
            <div class="container">
                <div class="copyright-layout">
                    <div class="layout-text wow fadeInUp" data-wow-delay=".3s">
                        <p class="copyright">
                            <i class="fal fa-copyright"></i> All Copyright 2024 by <a href="index.html">Extech</a>
                        </p>
                    </div>
                    <div class="layout-link wow fadeInUp" data-wow-delay=".6s">
                        <div class="link-wrapper">
                            <a href="contact.html">Terms &amp; Condition </a>
                            <a href="contact.html">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
</body>

</html>