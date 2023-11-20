@include('layouts.header')

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9WFW8R6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CH9FEM2M02"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CH9FEM2M02');
</script>


    <section class="pt-4 mt-lg-5">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta -->

                    <div class="d-flex justify-content-between align-items-lg-center">
                        <!-- Title -->
                        
    
                        <!-- Buttons -->
                        <div class="ms-3">
                            <!-- Share button -->
                            
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

    <section class="pt-0 ">
        <div class="container " data-sticky-container="">
            <div class="row g-4">
     
                <!-- Main content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">
    
                        <!-- Main cab list START -->
                        <div class="card border p-4 ">
                            <!-- Card body START -->
                            <div class="card-body p-0 ">
                                <div class="row g-4 align-items-center">
                                    <h3>Add Your Billing Address</h3>
                                    <!-- Image -->
                                                           <form role="form" action="{{route('postuser')}}" method="post"  style="margin-top:10px">
                        @csrf
                       <div class='form-row row'>
        <div class='col-xs-12 col-md-6 form-group '>
            <label class='control-label'>Name</label>
            <input class='form-control' name='name' size='4' type='text'>
        </div>
       
        <div class='col-xs-12 col-md-6 form-group '>
            <label class='control-label'>E-mail</label>
             <input class="form-control " type="email" placeholder="enter your e-mail" name="email"
                           >
        </div>
         <div class='col-xs-12 col-md-6 form-group '>
            <label class='control-label'>Phone Number</label>
            <input class='form-control' name='phone_number' size='4' type='text'>
        </div>
         <div class='col-xs-12 col-md-6 form-group '>
            <label class='control-label'>Billing Address</label>
            <input class='form-control' name='billing_address' size='4' type='text'>
        </div>
    </div>                       
                       
                       <div class='mt-2'>
       <div class="col-12 text-center">
    <button id="submit-button" class="btn btn-primary mb-0">Submit</button>
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" style="margin-left: 20px;">
        {{ __('Or Login?') }}
    </a>
</div>

    </div>
                     </form>
                                    </div>
                                </div>
                            </div>  
                           
                        </div>

            </div>
        </div>
    </section>
@include('layouts.footer')