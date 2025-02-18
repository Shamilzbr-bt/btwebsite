<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/BLOCKTECHTECHNOLOGY/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ex-coders">
    <meta name="description" content="BlockTech Technology">
    <!-- ======== Page title ============ -->
    <title>BlockTech Technology</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/main.css">
    <!--<< Loader.css >>-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/loader.css">

    <style>
        /* Banner */
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

        .header-main .main-menu ul li:hover>a {
            color: black;
        }

        .section-padding {
            /* padding: 60px 0; */
            padding: 50px 0;
        }

        .widget.widget_nav_menu.footer-widget .menu-all-pages-container .menu li a {
            font-size: 14px;
        }


        /* Menu scroll bar */

        /* ul.submenu {
            max-height: 400px;
            /* Adjust this value based on your design */
        /* overflow-y: auto; */
        /* overflow-x: hidden; */
        /* Prevent horizontal scrolling */
        /* } */
        */ ul.submenu::-webkit-scrollbar {
            display: none;
        }

        /* Breadcrumb*/
        .breadcrumb-wrapper::before {
            background-image: linear-gradient(270.07deg, #0aa471 0.07%, #00060C 99.95%);
        }

        /* .breadcrumb .page-heading {
            position: relative;
            padding: 180px 0;
            text-align: center;
            z-index: 9;
        } */

        .main-sidebar .single-sidebar-widget .news-widget-categories ul li .active {
            background-color: #df582b;
            color: var(--white);
            border-radius: inherit;
        }

        .main-sidebar .single-sidebar-widget .widget-categories ul li .active {
            background-color: #df582b;
            color: var(--white);
            border-radius: inherit;
        }
    </style>
</head>

<body>
<!-- pre loader area start -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- pre loader area end -->

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?php echo BASE_URL; ?>index.php">
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
                                            class="mailto:info@blocktech.com.kw">info@blocktech.com.kw</span></a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+965-22211226">
                                        +965-22211226</a>
                                </div>
                            </li>
                        </ul>

                        <!-- <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
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
                                <a href="<?php echo BASE_URL; ?>index.php" class="header-logo">
                                    <img src="<?php echo BASE_URL; ?>assets/img/logo/BLOCKTECH_logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="<?php echo BASE_URL; ?>index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo BASE_URL; ?>about.php">About</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Services
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo BASE_URL; ?>Services/BusinessCommunications.php">Business Communications</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Services/DigitalTransformation.php">Digital Transformation</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Services/CRM.php">Contact Center & CRM</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Services/ProfessionalServices.php">Professional Services</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Solutions
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo BASE_URL; ?>Solutions/ProcessAutomation.php">Process Automation & RPA</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Solutions/DocumentManagementSolutions.php">Document Management Solutions</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Solutions/DigitalTransformationConsultancy.php">Digital Transformation Consultancy</a></li>
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
                                                <a href="#">
                                                    Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                            ABBYY
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="<?php echo BASE_URL; ?>Products/ABBYY_Timeline.php">ABBYY Timeline</a></li>
                                                            <li><a href="<?php echo BASE_URL; ?>Products/ABBYY_FlexiCapture.php">ABBYY FlexiCapture</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="<?php echo BASE_URL; ?>Products/Bitrix24.php">Bitrix24</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/Cflow.php">CFLOW DMS</a></li>

                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                            Yanolja Cloud
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="<?php echo BASE_URL; ?>Products/eZee_Absolute_PMS.php">eZee Absolute PMS</a></li>
                                                            <li><a href="<?php echo BASE_URL; ?>Products/eZee_CentrixChannelManager.php">eZee Centrix Channel Manager</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="<?php echo BASE_URL; ?>Products/Kaleyra.php">Kaleyra</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/Gupshup.php">Gupshup</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/PIX_RPA.php">PIX RPA</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/eXertERP.php">eXertERP</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/Zoho.php">ZOHO</a></li>

                                                    <li><a href="<?php echo BASE_URL; ?>Products/SecPoint.php">SECPOINT</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/Footfallcam.php">Footfallcam</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/Fanvil.php">Fanvil</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/MSPowerBI.php">MS Power BI</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/AWSCloud.php">AWS Cloud</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/GoogleCloud.php">Google Cloud</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/BTSMSGateway.php">BT SMS Gateway</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Products/3CX_IP_PBX.php">3CX IP PBX</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Industries
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Retail.php">Retail</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Pharmaceuticals.php">Pharmaceuticals</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Corporates.php">Corporates</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Hospitality.php">Hospitality</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Healthcare.php">Healthcare</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Automotive.php">Automotive</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>Industries/Travel&Tourism.php">Travel & Tourism</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php echo BASE_URL; ?>contact.php">Contact</a>
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