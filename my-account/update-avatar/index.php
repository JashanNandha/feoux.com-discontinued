<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Update My account &#8211; Feoux</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    
    
    <noscript>
        <style>
            #backto-top {
                display: none;
            }
        </style>
    </noscript>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Blogar &raquo; Feed" href="../../feed/" />
    <link rel="alternate" type="application/rss+xml" title="Blogar &raquo; Comments Feed" href="../../comments/feed/" />
    <link rel='stylesheet' id='sb_instagram_styles-css' href='../../assets/content/plugins/instagram-feed/css/sbi-styles.min.css?ver=2.9.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='../../assets/includes/css/dist/block-library/style.min.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css' href='../../assets/includes/css/dist/block-library/theme.min.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-vendors-style-css' href='../../assets/content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=5.3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css' href='../../assets/content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=5.3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='../../assets/content/plugins/contact-form-7/includes/css/styles.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css' href='../../assets/content/plugins/woocommerce/assets/css/select2.css?ver=5.5.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='../../assets/content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=5.5.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='../../assets/content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.5.2' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='../../assets/content/plugins/woocommerce/assets/css/woocommerce.css?ver=5.5.2' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='axil-fonts-css' href='https://fonts.googleapis.com/css?family=Red+Hat+Display%3A0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900&#038;subset=latin%2Clatin-ext&#038;ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='../../assets/content/themes/blogar/assets/css/vendor/slick.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css' href='../../assets/content/themes/blogar/assets/css/vendor/slick-theme.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='../../assets/content/themes/blogar/assets/css/vendor/font-awesome.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='../../assets/content/themes/blogar/assets/css/vendor/bootstrap.min.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='axil-style-css' href='../../assets/content/themes/blogar/assets/css/style.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='axil-woocommerce-css' href='../../assets/content/themes/blogar/assets/css/woocommerce.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='blogar-style-css' href='../../assets/content/themes/blogar/style.css?ver=5.7.2' type='text/css' media='all' />
    <script type='text/javascript' src='../../assets/includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
    <script type='text/javascript' src='../../assets/includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/slick.min.js?ver=1.1.3' id='slick-js'></script>
    <link rel="https://api.w.org/" href="../../wp-json/" />
    <link rel="alternate" type="application/json" href="../../wp-json/wp/v2/pages/795" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../assets/includes/wlwmanifest.xml" />
    
    <link rel="canonical" href="../../my-account/" />
    <link rel='shortlink' href='../../?p=795' />
    <link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fmy-account%2F" />
    <link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fmy-account%2F&#038;format=xml" />
    <meta name="framework" content="Redux 4.1.29" />
    <style type="text/css" media="all">
    </style>
    <!--Customizer CSS-->
    <style type="text/css">
    </style>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css" id="wp-custom-css">
        .mainmenu-nav ul.mainmenu>li.megamenu-wrapper .megamenu-sub-menu {
            max-width: 1230px;
        }

        .header-bottom .col-xl-8.col-lg-4.col-md-6.col-sm-4.col-7 {
            position: static;
        }

        .axil-header .axil-mainmenu-withbar {
            position: static;
        }

        .axil-header.header-style-3 .col-md-6.col-sm-3.col-4.col-xl-8 {
            position: static;
        }

        .post-grid-one-update .axil-video-post-area.axil-section-gap {
            padding: 30px 0;
        }

        .post-grid-one-update .content-block.post-default .post-content {
            margin-top: 20px;
        }
    </style>
</head>

<body class="page-template-default page page-id-795 wp-embed-responsive theme-blogar woocommerce-account woocommerce-page woocommerce-no-js page-my-account active-scroll-to-top  header-with-search elementor-default elementor-kit-12">
<div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
<span title="Light Mode"><i class="fas fa-sun"></i></span>
</a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
<span title="Dark Mode"><i class="fas fa-moon"></i></span>
</a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <!-- Start Header -->
<header class="header axil-header header-style-1 header-light header-with-shadow   ">
                    <div class="header-wrap">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="logo">
                                    <a href="../../" title="feoux" rel="home">


                                        <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                        <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">


                                    </a>

                                </div>
                                <!-- End Logo-->
                            </div>

                            <div class="axil-mainmenu-withbar col-md-3 col-sm-3 col-3 col-xl-6">
                                <div class="mainmenu-wrapper d-none d-xl-block">
                                    <!-- Start Mainmanu Nav -->
                                    <nav class="mainmenu-nav d-none d-lg-block">
                                        <ul id="main-menu" class="mainmenu">
                                            <li id="menu-item-437" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page "><a href="../../">Home</a>
                                            </li>
                                            <li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  axil-post-type-page "><a href="../../ask-now/">Ask Feoux</a>
                                            </li>
                                            <li id="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  axil-post-type-page "><a href="../../extra/Help/">Help</a>
                                            </li>
                                            <li id="menu-item-675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/about-us/">About Us</a></li>
                                            <li id="menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page "><a href="../../extra/contact-us/">Contact Us</a>
                                            </li>

                                        </ul>
                                    </nav>
                                    <!-- End Mainmanu Nav -->
                                </div>
                                <!-- Start Hamburger Menu  -->
                                <div class="hamburger-menu d-block d-xl-none text-right">
                                    <div class="hamburger-inner">
                                        <div class="icon"><i class="fas fa-bars"></i></div>
                                    </div>
                                </div>
                                <!-- End Hamburger Menu  -->
                            </div>


                            <div class="d-none d-sm-block col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="header-search text-right d-flex align-items-center justify-content-end">

                                    <form id="header-search-1" action="../../search/" method="GET" class="blog-search">
                                        <div class="axil-search form-group">
                                             <button type="submit" name="search" class="search-button"><i class="fas fa-search"></i></button>
            <input type="text" name="input" title="Type to search Anything" class="form-control" placeholder="Search ..." autocomplete="off" value="" />
           
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mobile-search-wrapper d-block d-sm-none col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="header-search text-right d-flex align-items-center justify-content-end">
                                    <div class="search-mobile-icon">
                                        <button><i class="fas fa-search"></i></button>
                                    </div>
                                    <form id="header-search-1" action="../../search/" method="GET" class="blog-search large-mobile-blog-search">
                                        <div class="axil-search-mobile form-group">
                                             <button type="submit" name="search" class="search-button"><i class="fas fa-search"></i></button>
            <input type="text" name="input" title="Type to search Anything" class="form-control" placeholder="Search ..." autocomplete="off" value="" />
           
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                <!-- Start Header -->
                <!-- Start Mobile Menu Area  -->
                <div class="popup-mobilemenu-area">
                    <div class="inner">
                        <div class="mobile-menu-top">
                            <div class="logo">
                                <a href="../../" title="feoux" rel="home">



                                    <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">

                                    <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">


                                </a>
                            </div>
                            <div class="mobile-close">
                                <div class="icon">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>
                        </div>
                        <nav class="menu-item">
                            <ul id="mobile-menu" class="mainmenu-item">
                                <li id="menu-item-437" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../">Home</a>
                                </li>
                                <li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../ask-now/">Ask Feoux</a>
                                </li>
                                <li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/Help/">Help</a>
                                </li>
                                <li id="menu-item-675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/about-us/">About Us</a></li>
                                <li id="menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/contact-us/">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu Area  -->
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area breadcrumb-style-1 bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <ul id="breadcrumbs" class="axil-breadcrumb liststyle d-flex">
                                <li class="item-home"><a class="bread-link bread-home" href="../../" title="Home">Home</a></li>
                                <li class="separator separator-home"> </li>
                                <li class="item-current item-795"><span class="bread-current bread-795"> My account</span></li>
                            </ul>
                            <h1 class="page-title"> Update Avatar</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Page Wrapper -->
        <div class="main-wrapper">
            <div class="axil-section-gap bg-color-white">
                <div class="container">
                    <article id="post-795" class="post-795 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <center>
                                    <form class='woocommerce-form woocommerce-form-login login' method='post' action='avatar-sucessfull.php' enctype="multipart/form-data" style='text-align:center;'>
                                        <input style='background-color: #0093FF;color: white;width: 70%;padding: 10px;height: 49px;border-radius: 5px;' id="file" class="form-control m-b-md" name="file" type="file" accept="image/*" required>&nbsp;&nbsp;
                                        <p class='form-row'>
                                            <button type='submit' class='woocommerce-button button woocommerce-form-login__submit' name='submit' value='submit'>Update</button>

                                        </p>
                                    </form>
                                </center>
                            </div>

                        </div>
                    </article>
                </div>
            </div>
            <style>
                .mainmenu-nav ul.mainmenu>li>a {
                    color: #212121;
                }
            </style>

        </div>
        <!-- End Page Wrapper -->

    </div>
    <!-- End main-content -->



    <!-- Start Footer Area  -->
    <div class="axil-footer-area axil-default-footer axil-footer-var-1 footer-menu-active">
        


        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-default-footer axil-footer-var-3 bg-color-white">
            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Post List  -->
                            <div class="inner d-flex align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a class="facebook-f social-icon" href="https://www.facebook.com/feoux04" title="Facebook-f" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter social-icon" href="https://twitter.com/feoux1" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin-in social-icon" href="https://linkedin.com/" title="Linkedin-in" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="instagram social-icon" href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->
            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12">
                            <div class="copyright-left">
                                <div class="logo">
                                    <a href="../../" title="feoux" rel="home">
                                        <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                        <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                    </a>
                                </div>
                                <!-- End Logo-->
                                <ul id="menu-footer-bottom-menu" class="mainmenu justify-content-start">
                                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="../../extra/contact-us/">Contact Us</a></li>
                                    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="../../extra/terms-of-use/">Terms of Use</a></li>
                                    <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="../../ads/">Advertise with Us</a></li>
                                    <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="../../extra/Help/">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12">
                            <div class="copyright-right text-left text-xl-right mt_lg--20 mt_md--20 mt_sm--20">
                                <p class="b3">© <?php echo date("Y"); ?>. All rights reserved by <a href="https://feoux.com" target="_blank" rel="noopener">feoux.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </div>
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top">
        <center><i class="fas fa-angle-up" style="color: white;margin-top: 30%;"></i></center></a>
        <!-- End Back To Top  -->
        <!-- Instagram Feed JS -->
        <script type="text/javascript">
            var sbiajaxurl = "../../wp-admin/admin-ajax.php";
        </script>
        <script type="text/javascript">
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <link rel='stylesheet' id='elementor-icons-css' href='../../assets/content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.12.0' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-legacy-css' href='../../assets/content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.3.1' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css' href='../../assets/content/plugins/elementor/assets/css/frontend.min.css?ver=3.3.1' type='text/css' media='all' />
        <style id='elementor-frontend-inline-css' type='text/css'>
            @font-face {
                font-family: eicons;
                src: url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
                src: url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
                font-weight: 400;
                font-style: normal
            }
        </style>
        <link rel='stylesheet' id='elementor-post-12-css' href='../../assets/content/uploads/elementor/css/post-12.css?ver=1627040536' type='text/css' media='all' />
        <link rel='stylesheet' id='e-animations-css' href='../../assets/content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.3.1' type='text/css' media='all' />
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.7.2' type='text/css' media='all' />
        <script type='text/javascript' src='../../assets/content/plugins/blogar-core/assets/js/element-scripts.js?ver=1.0' id='blogar-element-scripts-js'></script>
        <script type='text/javascript' src='../../assets/includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
        <script type='text/javascript' id='wp-polyfill-js-after'>
            ('fetch' in window) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>');
            (document.contains) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>');
            (window.DOMRect) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>');
            (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>');
            (window.FormData && window.FormData.prototype.keys) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>');
            (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>');
            ('objectFit' in document.documentElement.style) || document.write('<script src="../../assets/includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>');
        </script>
        <script type='text/javascript' id='contact-form-7-js-extra'>
            /* <![CDATA[ */
            var wpcf7 = {
                "api": {
                    "root": "http:\/\/axilthemes.com\/themes\/blogar\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                }
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2' id='contact-form-7-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
        <script type='text/javascript' id='wc-add-to-cart-js-extra'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/themes\/blogar\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/themes\/blogar\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View cart",
                "cart_url": "http:\/\/axilthemes.com\/themes\/blogar\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.5.2' id='wc-add-to-cart-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9' id='selectWoo-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
        <script type='text/javascript' id='woocommerce-js-extra'>
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/themes\/blogar\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/themes\/blogar\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.5.2' id='woocommerce-js'></script>
        <script type='text/javascript' id='wc-cart-fragments-js-extra'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/themes\/blogar\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/themes\/blogar\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_db7f793fd6d883aa1f9d28d99235f621",
                "fragment_name": "wc_fragments_db7f793fd6d883aa1f9d28d99235f621",
                "request_timeout": "5000"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.5.2' id='wc-cart-fragments-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/modernizr.min.js?ver=1.1.3' id='modernizr-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/popper.js?ver=1.1.3' id='popper-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/tweenmax.min.js?ver=1.1.3' id='tweenmax-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/gsap.js?ver=1.1.3' id='gsap-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/commands.js?ver=1.1.3' id='axil-copylink-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/js.cookie.js?ver=1.1.3' id='axil-cookie-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/bootstrap.min.js?ver=1.1.3' id='bootstrap-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/main.js?ver=1.1.3' id='axil-main-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/jquery.style.switcher.js?ver=1.1.3' id='jquery-style-switcher-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/admin/js/navigation.js?ver=1.1.3' id='blogar-navigation-js'></script>
        <script type='text/javascript' src='../../assets/content/themes/blogar/assets/admin/js/skip-link-focus-fix.js?ver=1.1.3' id='blogar-skip-link-focus-fix-js'></script>
        <script type='text/javascript' src='../../assets/includes/js/wp-embed.min.js?ver=5.7.2' id='wp-embed-js'></script>
        <script type='text/javascript' id='sb_instagram_scripts-js-extra'>
            /* <![CDATA[ */
            var sb_instagram_js_options = {
                "font_method": "svg",
                "resized_url": "http:\/\/axilthemes.com\/themes\/blogar\/assets/content\/uploads\/sb-instagram-feed-images\/",
                "placeholder": "http:\/\/axilthemes.com\/themes\/blogar\/assets/content\/plugins\/instagram-feed\/img\/placeholder.png"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=2.9.2' id='sb_instagram_scripts-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.3.1' id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.3.1' id='elementor-frontend-modules-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
        <script type='text/javascript' src='../../assets/includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.3.1' id='share-link-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
        <script type='text/javascript' id='elementor-frontend-js-before'>
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile",
                            "value": 767,
                            "direction": "max",
                            "is_enabled": true,
                            "default_value": 767
                        },
                        "mobile_extra": {
                            "label": "Mobile Extra",
                            "value": 880,
                            "direction": "max",
                            "is_enabled": false,
                            "default_value": 880
                        },
                        "tablet": {
                            "label": "Tablet",
                            "value": 1024,
                            "direction": "max",
                            "is_enabled": true,
                            "default_value": 1024
                        },
                        "tablet_extra": {
                            "label": "Tablet Extra",
                            "value": 1365,
                            "direction": "max",
                            "is_enabled": false,
                            "default_value": 1365
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1620,
                            "direction": "max",
                            "is_enabled": false,
                            "default_value": 1620
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "direction": "min",
                            "is_enabled": false,
                            "default_value": 2400
                        }
                    }
                },
                "version": "3.3.1",
                "is_static": false,
                "experimentalFeatures": {
                    "e_import_export": true,
                    "landing-pages": true,
                    "elements-color-picker": true,
                    "admin-top-bar": true
                },
                "urls": {
                    "assets": "http:\/\/axilthemes.com\/themes\/blogar\/assets/content\/plugins\/elementor\/assets\/"
                },
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 795,
                    "title": "My%20account%20%E2%80%93%20Blogar",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/frontend.min.js?ver=3.3.1' id='elementor-frontend-js'></script>
        <script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.3.1' id='preloaded-modules-js'></script>
</body>

</html>