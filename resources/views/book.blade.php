@include('layouts.header')


    <section class="pt-4 mt-lg-5">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta -->

                    <div class="d-flex justify-content-between align-items-lg-center">
                        <!-- Title -->
                        <ul class="nav nav-divider text-dark align-items-center mb-0">
                            <li class="nav-item fw-semibold h4">Chicago - San Antonio</li>
                            <li class="nav-item h5 fw-light">Outstation- Oneway</li>
                            <li class="nav-item h5 fw-light">22 Jan 2022 - 07.25 PM</li>
                        </ul>
    
                        <!-- Buttons -->
                        <div class="ms-3">
                            <!-- Share button -->
                            <a href="#" class="btn btn-sm btn-light px-2 mb-0" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-fw fa-share-alt"></i>
                            </a>
                            <!-- dropdown button -->
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->
        </div>
    </section>

    <section class="pt-0">
        <div class="container" data-sticky-container="">
            <div class="row g-4">
     @foreach($cars as $car)
                <!-- Main content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">
    
                        <!-- Main cab list START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-4 align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="{{ asset( $car->img) }}" alt="Car Image">
                                        </div>
                                    </div>
    
                                    <!-- card body -->
                                    <div class="col-md-8">
                                        <!-- Title and rating -->
                                        <div class="d-sm-flex justify-content-sm-between">
                                            <!-- Card title -->
                                            
                                            <div>
                                                <h4 class="card-title text-dark fw-semibold mb-2">{{$car->name}}</h4>
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">{{$car->type}}</li>
                                                    <li class="nav-item">&nbsp;{{$car->ac}}</li>
                                                    <li class="nav-item">&nbsp;{{$car->seats}}</li>
                                                </ul>
                                            </div>

                                            <!-- Rating Star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                        </div>
    
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i class="fa fa-check me-2"></i>{{ $latestDistance }}</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i class="fa fa-check me-2"></i>{{ $search->first()->luggage }} </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i class="fa fa-check me-2"></i>{{ $car->type }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                            <!-- Card body END -->
    
                            <!-- Card footer -->
                            <div class="card-footer p-0 pt-4">
                                <div class="hstack gap-3 flex-wrap">
                                    <!-- Item -->
                                    <h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
                                        Free Cancellation, till 1 hour of Pick up
                                    </h6>
                
                                    <!-- Item -->
                                    <h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
                                        Free waiting up to 45 minutes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Main cab list END -->
    
                  
                        <!-- Trip Details END -->
    
                        <!-- Driver and cab detail START -->
                        <div class="card bg-transparent">
    
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0 text-start text-dark fw-semibold">Driver and Cab details</h4>
                            </div>
    
                            <!-- Card body -->
                            <div class="card-body pt-4 p-0">
                                <!-- List -->
                                <p class="card-text">
                    {{$car->driver_cab_details}}
                </p>
    
                                <!-- Cab images -->
                                <h5 class="mb-0 text-start text-dark fw-semibold mb-2">Cab Images</h5>
    
                                <!-- Alert box -->
                                <div class="alert alert-warning text-start fs-6" role="alert">
                                    All pictures shown are for illustration purposes only. The actual product may vary due to product enhancement.
                                </div>
    
                              
                            </div>	
    
                        </div>
                        <!-- Driver and cab detail END -->
                        
                        <!-- Inclusion & Exclusion START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0 text-start text-dark fw-semibold ">Inclusion &amp; Exclusion</h4>
                            </div>
    
                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- Detail START -->
                                <div class="row g-3">
                                    <!-- List -->
                                    <div class="col-sm-6">
            <h5 class="text-start fw-semibold text-dark">Included in your price</h5>
            <ul class="list-group text-start list-group-borderless mb-0">
                @foreach(explode("\n", $car->inclusion) as $item)
                    <li class="list-group-item mb-0 pb-0"><i class="fa fa-check text-success me-1"></i>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    
                                    <!-- List -->
                                    <div class="col-sm-6">
            <h5 class="text-start fw-semibold text-dark">Extra Charge</h5>
            <ul class="list-group text-start list-group-borderless mb-0">
                @foreach(explode("\n", $car->exclusion) as $item)
                    <li class="list-group-item mb-0 pb-0"><i class="fa fa-check text-success me-1"></i>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
                                </div>
                                <!-- Detail END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Inclusion & Exclusion END -->
    
                        <!-- Safety Guidelines START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0 text-start fw-semibold text-dark">Safety Guidelines</h4>
                            </div>
    
                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                               <p class="card-text">
                    {{$car->safety_guidelines}}
                </p>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Safety Guidelines END -->
                    </div>
                </div>
                <!-- Main content END -->
    
                <!-- Sidebar START -->
                <aside class="col-xl-4">
                    <div data-sticky="" data-margin-top="80" data-sticky-for="1199" style="">
                        <div class="card card-body bg-light p-4">
                            <!-- Title -->
                            <h6 class="text-danger fw-normal">Hurry! Limited cars left</h6>
    
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-0">
                                @foreach($carPrices as $carId => $price)
                                 @if($car->id == $carId)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Base Price</span>
                                    <span class="h6 fw-light mb-0">{{ $price }}P</span>
                                </li>
                                @endif
@endforeach
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">State Tax</span>
                                    <span class="h6 fw-light mb-0">50P</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Night Charge</span>
                                    <span class="h6 fw-light mb-0">100P</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Convenience Fee</span>
                                    <span class="h6 fw-light mb-0">25P</span>
                                </li>
                                <li class="list-group-item py-0"><hr class="my-0"></li> 
                                <!-- Divider -->
                                 @foreach($carPrices as $carId => $price)
                                 @if($car->id == $carId)
                                <li class="list-group-item d-flex justify-content-between pb-0">
                                    <span class="h5 fw-normal mb-0">Total</span>
                                    <span class="h5 fw-normal mb-0">{{ $price }}P</span>
                                </li>
                                @endif
@endforeach
                               
                            </ul>
    
                            <div class="d-grid mt-4 gap-2">
                                <!-- <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount1" value="option1" checked="">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount1">Pay $220 now (Half Payment)</label>
                                </div> -->
    @foreach($carPrices as $carId => $price)
                                 @if($car->id == $carId)
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount2" value="option2" checked="">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount2">Pay {{ $price }}P now (Full payment)</label>
                                </div>
                                @endif
@endforeach
    
                                <!-- Button -->
                                <a href="{{ route('confirmbooking', ['car_id' => $car->id]) }}" class="btn btn-dark mb-0 mt-2">Pay Now</a>
                            </div>
                        </div>
                    </div> 
                </aside>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    @endforeach
@include('layouts.footer')