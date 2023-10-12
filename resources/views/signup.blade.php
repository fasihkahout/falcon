<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="screens/signup/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/signinlogin.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/elements.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/newfooter.css">
</head>
<body>

    <header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        <a href="index.html"><img src="assets/img/logodark.png" alt="Logo"></a>
                    </div>
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="fa-solid fa-phone-volume" style="font-size: 20px;"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:5267214392">5267-214-392</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="fa-regular fa-envelope-open fa-sm" style="font-size: 20px;"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span><a href="#" class="__cf_email__"
                                        data-cfemail="5910373f36772b303d3c321934383035773a3634">admin@falcontransport.com</a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="fa-solid fa-map-location-dot" style="font-size: 20px;"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Halk Street</span>New York, USA - 2386</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-menu-wrapper">
            <div class="container">
                <div class="nav-menu-inner">
                    <div class="site-logo">
                        <a href="index.html"><img src="assets/img/logologht.png" alt="Logo"></a>
                    </div>
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="active dropdown_menu">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="Airports.html">Airports</a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="#">Manage Reservations</a>

                            </li>
                            <li class="dropdown_menu">
                                <a>Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Grid Posts</a></li>
                                    <li><a href="blog-classic.html">Classic Posts</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
                        <div class="search-icon dl-search-icon" style="color: white;">
                            <img src="assets/img/search.png" alt="">
                        </div>
                        <div class="sidebox-icon dl-sidebox-icon">
                            <img src="assets/img/MenuIcon.png" alt="">
                        </div>
                        <div class="btn-group " role="group" aria-label="...">
                            <button type="button" class="btn signup-inbtn">
                                <a href="signup.html" class="signup-in ">Sign Up</a>
                            </button>
                            <button type="button" class="btn  signup-inbtn">
                                <a href="login.html" class="signup-in">Log In</a>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="fa-solid fa-magnifying-glass fa-sm" style="font-size: 20px;"></i>
                </button>
            </form>
            <div class="search-close">
                <i class="fa-regular fa-circle-xmark fa-sm" style="font-size: 20px;"></i></div>
        </div>
    </div>
    <div id="searchbox-overlay"></div>
    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index.html"><img src="assets/img/logodark.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is already here! Falcon, a theme made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>5267-214-392</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>admin@falcontransport.com</a></li>
            </ul>
        </div>
    </div>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container1">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-wrap ">
                                <input class="signin-input " id="form-location" type="text" placeholder="enter your name" name="pickup-address"
                                    >
                                <label class="signin-label d-flex flex-md-row justify-content-between " for="form-location">Name</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="signin-input " id="form-location" type="email" placeholder="enter your e-mail" name="pickup-address"
                                    >
                                <label class="signin-label d-flex flex-md-row justify-content-between " for="form-location">E-mail</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="signin-input " id="form-location" type="password" placeholder="enter your password" name="pickup-address"
                                    >
                                <label class="signin-label d-flex flex-md-row justify-content-between " for="form-location">Password</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="signin-input " id="form-location" type="password" placeholder="confirm password" name="pickup-address"
                                    >
                                <label class="signin-label d-flex flex-md-row justify-content-between " for="form-location">Password</label>
                            </div>
                             <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div> 
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/car-1.png" alt="sing up image"></figure>
                        <a href="login.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


        
        </div>

    
        <footer class="section footer-classic">
            <div class="footer-classic-main">
                <div class="container">
                    <div class="row row-50 justify-content-lg-between">
                        <div class="col-sm-7 col-lg-3 col-xl-2 text-start"><a class="brand d-flex" href="index.html"><img
                                    class="brand-logo-dark" src="assets/img/logodark.png" alt="" width="111" height="33"
                                    loading="lazy" ></a>
                            <p class="text-start"><span style="max-width: 250px;">We provide the best taxi services for you
                                    all over the USA.</span></p><a
                                class="button button-sm button-default-outline button-winona">
                               
                                <div class="content-dubbed">Order Now</div>
                            </a>
                        </div>
                        <div class="col-sm-5 col-lg-3 col-xl-2">
                            <h5 class="footer-classic-title">About</h5>
                            <ul class="list footer-classic-list ms-0 ps-0">
                                <li class="mb-3"><a href="Airports.html">Airports</a></li>
                                <li class="mb-3"><a href="">Manage Reservation</a></li>
                                <li class="mb-3"><a href="blog-grid.html">Blogs</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-7 col-lg-5 col-xl-3">
                            <h5 class="footer-classic-title">Quick Links</h5>
                            <ul class="list footer-classic-list footer-classic-list_2-cols ms-0 ps-0">
                                <li class="mb-3"><a href="signup.html">Sign Up</a></li>
                                <li class="mb-3"><a href="login.html">Login</a></li>
                                <li class="mb-3"><a href="blog-grid.html">Blog</a></li>
                                <li class="mb-3">Privacy policy</li>
                                <li class="mb-3">FAQ</li>
                            </ul>
                        </div>
                        <div class="col-sm-5 col-lg-9 col-xl-2">
                            <h5 class="footer-classic-title">Contacts</h5>
                            <div class="row row-20 row-sm-35">
                                <div class="col-6 col-sm-12 col-lg-8 col-xl-12">
                                    <div class="row row-10 text-black">
                                        <div class="col-lg-6 col-xl-12"><a href="mailto:#">info@falcontransport.com</a></div>
                                        <div class="col-lg-6 col-xl-12"><a href="tel:#">+1-800-123-1234</a></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-4 col-xl-12 text-end text-sm-start">
                                    <div class="group group-xs"><a class="link link-social-1 mdi mdi-twitter"
                                            href="#"></a><a class="link link-social-1 mdi mdi-facebook" href="#"></a><a
                                            class="link link-social-1 mdi mdi-instagram" href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-classic-aside">
                <div class="container">
                    <p class="rights text-center"><span>©&nbsp; </span><span class="copyright-year">2023</span><span>. All
                            Rights Reserved</span></p>
                </div>
            </div>
        </footer>

        <!-- JS -->
        <script src="assets/js/vendor/jquary-3.6.0.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://kit.fontawesome.com/36298aea6d.js" crossorigin="anonymous"></script>
</body></html>