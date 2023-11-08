@include('layouts.header')

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

      
<div id="popup-search-box">
<div class="box-inner-wrap d-flex align-items-center">
<form id="form" action="#" method="get" role="search">
<input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
<button id="popup-search-button" type="submit" name="submit">
    <i class="fa-solid fa-magnifying-glass fa-sm" style="font-size: 20px;"></i>
</button>
</form>
<div class="search-close"><i class="fa-regular fa-circle-xmark fa-sm" style="font-size: 20px;"></i></div>
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

<div id="sidebox-overlay"></div>
<section class="page-header">
<div class="page-header-shape"></div>
<div class="container">
    <div class="page-header-info">
        <h4>Blog Grid!</h4>
        <h2>Feel your journey <br> with <span>Falcon!</span></h2>
        <p>Everything your taxi business <br>needs is already here! </p>
    </div>
</div>
</section>


<section class="blog-section blog-page bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sm-padding">
                <div class="row grid-post">
                    @foreach($blogs as $blog)
                    <div class="col-md-6 padding-15">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{$blog->img}}" alt="post">
                                <a href="blog-details.html" class="post-category">{{$blog->category}}</a>
                            </div>
                            <div class="post-content-wrap">
                                <ul class="post-meta">
                                    <i class="fa-solid fa-calendar-days fa-2xs"></i>{{$blog->created_at->format('M d Y')}}
</li>
                                    <li><i  class="fa-solid fa-user fa-2xs"></i>{{$blog->written_by}}</li>
                                </ul>
                                <div class="post-content">
                                    <h3><a href="blog-details.html" class="hover">{{$blog->title}}</a></h3>
                                    <p>{!! mb_substr($blog->editor, 0, mb_strlen($blog->editor) / 5) !!}...</p>
                                   <a href="{{ route('blogdetails', ['blog_id' => $blog->id]) }}" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
                
                                   
               <!--  <ul class="pagination-wrap text-left mt-30">
                    <li><a href="#"><i class="fa-solid fa-arrow-left fa-2xs"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right fa-2xs"></i></a></li>
                </ul> -->

            </div>

            <div class="col-lg-4 sm-padding">
                <div class="sidebar-widget">
                    <form action class="search-form">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Categories</h3>
                    </div>
                    <ul class="category-list">
                        <li><a href="blog-grid.html">Business Strategy</a><span>23</span></li>
                        <li><a href="blog-grid.html">Project Management</a><span>05</span></li>
                        <li><a href="blog-grid.html">Digital Marketing</a><span>18</span></li>
                        <li><a href="blog-grid.html">Customer Experience</a><span>04</span></li>
                        <li><a href="blog-grid.html">Partnership System</a><span>15</span></li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Recent Articles</h3>
                    </div>
                    <ul class="thumb-post">
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-1.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details.html">How To Go About Initiating An Startup In Few Days.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-thumb-2.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details.html">Financial Experts Support Help You To Find Out.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-thumb-3.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details.html">Innovative Helping Business All Over The World.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Tags</h3>
                    </div>
                    <ul class="tags">
                        <li><a href="#">business</a></li>
                        <li><a href="#">marketing</a></li>
                        <li><a href="#">startup</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">consulting</a></li>
                        <li><a href="#">strategy</a></li>
                        <li><a href="#">development</a></li>
                        <li><a href="#">tips</a></li>
                        <li><a href="#">Seo</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>
@include('layouts.footer')