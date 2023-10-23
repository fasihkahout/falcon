<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FalconOnline Taxi Booking HTML5 Template">
    <meta name="author" content="DynamicLayers">
    <title>Falcon- Online Taxi Booking Service HTML5 Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/keyframe-animation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/newfooter.css')}}">
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->

     <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    </head>

<body>

    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div>
    <header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{asset('assets/img/logodark.png')}}" alt="Logo"></a>
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
                                <h3><span>Email now</span><a>admin@falcontransport.com</a>
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
                        <a href="index.html"><img src="{{asset('assets/img/logologht.png')}}" alt="Logo"></a>
                    </div>
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="active dropdown_menu">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="{{url('airports')}}">Airports</a>
                            </li>
                            <li class="dropdown_menu">
                                <a>Blog</a>
                                <ul>
                                    <li><a href="{{ url('blog-grid') }}">Grid Posts</a></li>
                                    <li><a href="{{ url('blog-classic') }}">Classic Posts</a></li>
                                    <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
    <div class="search-icon dl-search-icon" style="color: white;">
        <img src="{{asset('assets/img/search.png')}}" alt="">
    </div>
    <div class="sidebox-icon dl-sidebox-icon">
        <img src="{{asset('assets/img/MenuIcon.png')}}" alt="">
    </div>
    <div class="btn-group " role="group" aria-label="...">

        @if(auth()->check()) <!-- Check if the user is logged in -->
           <span>Welcome, <a href="{{ route('dashboard') }}" style="color:white;">{{ auth()->user()->name }}</a></span>

        @else
            <button type="button" class="btn signup-inbtn">
                <a href="{{ url('register' )}}" class="signup-in">Sign Up</a>
            </button>
            <button type="button" class="btn  signup-inbtn">
                <a href="{{ url('login' )}}" class="signup-in">Log In</a>
            </button>
        @endif

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