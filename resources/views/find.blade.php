@include('layouts.header')
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
    <body>

        <!-- Header START -->
    
        <!-- Header END -->
    
        <!-- **************** MAIN CONTENT START **************** -->
        <main>
    
            <!-- =======================
    Search START -->
       
            <!-- =======================
    Search START -->
    
            <!-- =======================
    Titles START -->
            <section class="pt-6">
                <div class="container position-relative">
    
                    <!-- Title and button START -->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <!-- Title -->
                                <div class="mb-2 mb-sm-0">
                                    <h1 class="fs-3 mb-2">5 Cabs Available</h1>
                                    <!-- Divider -->
                                    <ul class="nav nav-divider h6 mb-0">
                                        <li class="nav-item">One-way trip</li>
                                        <li class="nav-item">152 kms</li>
                                        <li class="nav-item">2 Adults</li>
                                    </ul>
                                </div>
    
                                <!-- Offcanvas Button -->
                                <button class="btn btn-primary-soft btn-primary-check d-xl-none mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                        </button>
                            </div>
                        </div>
                    </div>
                    <!-- Title and button END -->
    
                </div>
            </section>
            <!-- =======================
    Titles END -->
    
            <!-- =======================
    Cab list START -->
            <section class="pt-0">
                <div class="container" data-sticky-container>
                    <div class="row">
    
                        <!-- Left sidebar START -->
                    
                        <!-- Left sidebar END -->
    
                        <!-- Main content START -->
                        <div class="col-xl-8 col-xxl-9 m-auto">
                            <div class="vstack gap-4">
    
                             
                                <!-- Alert box END -->
    
                                <!-- Cab item START -->
                                <div class="card border p-4">
                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <div class="row g-2 g-sm-4 mb-4">
                                            <!-- Card image -->
                                            <div class="col-md-4 col-xl-3">
                                                <div class="bg-light rounded-3 px-4 py-5">
                                                    <img src="assets/img/seadan.svg" alt="">
                                                </div>
                                            </div>
    
                                            <!-- Card title and rating -->
                                            <div class="col-sm-6 col-md-4 col-xl-6">
                                                <h4 class="card-title mb-2"><a href="book.html" class="stretched-link">Camry, Accord</a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">SEDAN</li>
                                                    <li class="nav-item">AC</li>
                                                    <li class="nav-item">4 Seats</li>
                                                </ul>
    
                                                <!-- Rating Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item h6 fw-normal me-1 mb-0">4.5</li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>
    
                                            <!-- Button -->
                                            <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                                <!-- Discount -->
                                                <p class="text-danger mb-0">4% Off</p>
                                                <!-- Price -->
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item text-decoration-line-through me-1">$250</li>
                                                    <li class="list-inline-item h5 mb-0">$210</li>
                                                </ul>
                                                <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                            </div>
                                        </div>
                                        <!-- Row END -->
                                    </div>
                                    <!-- Card body END -->
    
                                    <!-- Card footer START -->
                                    <div class="card-footer border-top p-0 pt-3">
                                        <div class="row">
                                            <!-- List -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>Diesel Car</span>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <!-- Info -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free Cancellation, till 1 hour of Pick up
                                                    </li>
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free waiting up to 45 minutes
                                                    </li>
                                                </ul>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- card footer END -->
                                </div>
                                <!-- Cab item END -->
    
                                <!-- Cab item START -->
                                <div class="card border p-4">
                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <div class="row g-2 g-sm-4 mb-4">
                                            <!-- Card image -->
                                            <div class="col-md-4 col-xl-3">
                                                <div class="bg-light rounded-3 px-4 py-5">
                                                    <img src="assets/img/seadan.svg" alt="">
                                                </div>
                                            </div>
    
                                            <!-- Card title and rating -->
                                            <div class="col-sm-6 col-md-4 col-xl-6">
                                                <h4 class="card-title mb-2"><a href="book.html" class="stretched-link">Audi, BMW</a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">LUX</li>
                                                    <li class="nav-item">AC</li>
                                                    <li class="nav-item">2 Seats</li>
                                                </ul>
    
                                                <!-- Rating Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item h6 fw-normal me-1 mb-0">4.8</li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>
    
                                            <!-- Button -->
                                            <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                                <!-- Discount -->
                                                <p class="text-danger mb-0">2% Off</p>
                                                <!-- Price -->
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item text-decoration-line-through me-1">$500</li>
                                                    <li class="list-inline-item h5 mb-0">$550</li>
                                                </ul>
                                                <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                            </div>
                                        </div>
                                        <!-- Row END -->
                                    </div>
                                    <!-- Card body END -->
    
                                    <!-- Card footer START -->
                                    <div class="card-footer border-top p-0 pt-3">
                                        <div class="row">
                                            <!-- List -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>Diesel Car</span>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <!-- Info -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free Cancellation, till 1 hour of Pick up
                                                    </li>
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free waiting up to 45 minutes
                                                    </li>
                                                </ul>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- card footer END -->
                                </div>
                                <!-- Cab item END -->
    
                                <!-- Cab item START -->
                                <div class="card border p-4">
                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <div class="row g-2 g-sm-4 mb-4">
                                            <!-- Card image -->
                                            <div class="col-md-4 col-xl-3">
                                                <div class="bg-light rounded-3 px-4 py-5">
                                                    <img src="assets/img/lux.svg" alt="">
                                                </div>
                                            </div>
    
                                            <!-- Card title and rating -->
                                            <div class="col-sm-6 col-md-4 col-xl-6">
                                                <h4 class="card-title mb-2"><a href="book.html" class="stretched-link">Ertiga, Xylo</a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">SUV</li>
                                                    <li class="nav-item">AC</li>
                                                    <li class="nav-item">6 Seats</li>
                                                </ul>
    
                                                <!-- Rating Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item h6 fw-normal me-1 mb-0">4.3</li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>
    
                                            <!-- Button -->
                                            <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                                <!-- Discount -->
                                                <p class="text-danger mb-0">10% Off</p>
                                                <!-- Price -->
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item text-decoration-line-through me-1">$400</li>
                                                    <li class="list-inline-item h5 mb-0">$350</li>
                                                </ul>
                                                <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                            </div>
                                        </div>
                                        <!-- Row END -->
                                    </div>
                                    <!-- Card body END -->
    
                                    <!-- Card footer START -->
                                    <div class="card-footer border-top p-0 pt-3">
                                        <div class="row">
                                            <!-- List -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>Diesel Car</span>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <!-- Info -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free Cancellation, till 1 hour of Pick up
                                                    </li>
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free waiting up to 45 minutes
                                                    </li>
                                                </ul>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- card footer END -->
                                </div>
                                <!-- Cab item END -->
    
                                <!-- Cab item START -->
                                <div class="card border p-4">
                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <div class="row g-2 g-sm-4 align-items-center mb-4">
                                            <!-- Card image -->
                                            <div class="col-md-4 col-xl-3">
                                                <div class="bg-light rounded-3 px-4 py-5">
                                                    <img src="assets/img/seadan.svg" alt="">
                                                </div>
                                            </div>
    
                                            <!-- Card title and rating -->
                                            <div class="col-sm-6 col-md-4 col-xl-6">
                                                <h4 class="card-title mb-2"><a href="book.html" class="stretched-link">Suv, Innova Crysta</a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">SUV</li>
                                                    <li class="nav-item">AC</li>
                                                    <li class="nav-item">6 Seats</li>
                                                </ul>
    
                                                <!-- Rating Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item h6 fw-normal mb-0 me-1">4.3</li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>
    
                                            <!-- Button -->
                                            <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                                <!-- Discount -->
                                                <p class="text-danger mb-0">15% Off</p>
                                                <!-- Price -->
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item text-decoration-line-through me-1">$650</li>
                                                    <li class="list-inline-item h5 mb-0">$480</li>
                                                </ul>
                                                <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                            </div>
                                        </div>
                                        <!-- Row END -->
                                    </div>
                                    <!-- Card body END -->
    
                                    <!-- Card footer START -->
                                    <div class="card-footer border-top p-0 pt-3">
                                        <div class="row">
                                            <!-- List -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>Diesel Car</span>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <!-- Info -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free Cancellation, till 1 hour of Pick up
                                                    </li>
                                                    <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                        Free waiting up to 45 minutes
                                                    </li>
                                                </ul>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- card footer END -->
                                </div>
                                <!-- Cab item END -->
    
                                <!-- Pagination -->
                            </div>
                        </div>
                        <!-- Main content END -->
    
                    </div>
                    <!-- Row END -->
    
                </div>
            </section>
            <!-- =======================
    Cab list END -->
    
        </main>
        <!-- **************** MAIN CONTENT END **************** -->
    
        <!-- =======================
    Footer START -->
     
        <!-- =======================
    Footer END -->
    
        <!-- Back to top -->
        <div class="back-top"></div>
    
        <!-- Bootstrap JS -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
        <!-- Vendors -->
        <script src="assets/vendor/sticky-js/sticky.min.js"></script>
        <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
        <script src="assets/vendor/choices/js/choices.min.js"></script>
        <script src="assets/vendor/nouislider/nouislider.min.js"></script>
    
        <!-- ThemeFunctions -->
        <script src="assets/js/functions.js"></script>
    
    </body>



    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="fa-solid fa-arrow-up fa-sm"></i> style="font-size: 20px;"></i>
        </button>
    </div>

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>

    
@include('layouts.footer')