@include('layouts.header')
 @foreach($cars as $car)
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-9 mx-auto">
                    <div class="vstack gap-4">
    
                        <!-- Booking summary START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-4">
                                <h1 class="mb-0 fw-bold text-dark text-start fs-3">Booking summary</h1>
                            </div>
    
                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <div class="row g-md-4">
                                    <!-- Image -->
                                    <div class="col-md-3">
                                        <div class="bg-light rounded-3 px-4 py-5 mb-3 mb-md-0">
                                            <img src="{{ asset( $car->img) }}" alt="Car Image">
                                        </div>
                                    </div>
    
                                    <!-- Card and address detail -->
                                    <div class="col-md-9">
                                        <!-- Title -->
                                        <h5 class="card-title text-start fw-semibold text-dark mb-2">{{$car->name}}</h5>
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">{{isset($car->categories->car_categories)?$car->categories->car_categories:'N/A'}}</li>
                                            <li class="nav-item">&nbsp;{{$car->ac}}</li>
                                            <li class="nav-item">&nbsp;{{$car->seats}}</li>
                                        </ul>
    
                                        <!-- Pick up and drop address -->
                                        <div class="row">
                                            <div class="col-md-6 text-start">
                                                <small>Pickup address</small>
                                                <p class="h6 fw-light text-dark mb-md-0">{{ $search->first()->pickup_destination }}</p>
                                            </div>
    
                                            <div class="col-md-6 text-start">
                                                <small>Drop address</small>
                                                <p class="h6 fw-light text-dark mb-0">{{ $search->first()->dropoff_destination }}</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 text-start">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Journey Date:<span class="h6 fw-normal mb-0 ms-1 text-dark">25 Nov 2022</span></li>
                                            <li class="list-group-item">Distance:<span class="h6 fw-normal mb-0 ms-1 text-dark">230 km</span></li>
                                        </ul>
                                    </div>
            
                                    <div class="col-md-6 text-start">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Passengers:<span class="h6 fw-normal mb-0 ms-1 text-dark">1</span></li>
                                            <li class="list-group-item">Luggages:<span class="h6 fw-normal mb-0 ms-1 text-dark">{{ $search->first()->luggage }}</span></li>
                                        </ul>
                                    </div>
                                </div>
    
                                <!-- Title -->
                                <h6 class="mb-0 text-start text-dark fw-semibold mt-3">Passenger Detail</h6>
    
                                <div class="row">
                                    <!-- List -->
                                    <div class="col-sm-8 text-start">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item">Passenger Name:<span class="h6 mb-0 fw-normal ms-1">Billy Vasquez</span></li>
                                            <li class="list-group-item">Passenger Email:<span class="h6 mb-0 fw-normal ms-1">example@gmail.com</span></li>
                                            <li class="list-group-item">Passenger Number:<span class="h6 mb-0 fw-normal ms-1">+222 555 666 85</span></li>
                                        </ul>
                                    </div>
     @foreach($carPrices as $carId => $price)
                                 @if($car->id == $carId)
                                    <!-- Price -->
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-auto">
                                        <h6 class="mb-1 fw-normal">Total Amount</h6>
                                        <h2 class="mb-0 fw-bolder text-success">{{ $price }}P</h2>
                                    </div>
                                </div>
                            </div>	
                            <!-- Card body END -->
                        </div>
                        <!-- Booking summary END -->
                        @endif
@endforeach
    
                        <!-- Payment START -->
                        <div class="card shadow">
                            <!-- card header -->
                            <div class="card-header border-bottom p-4">
                                <h4 class="mb-0 text-start text-dark fw-bold">How would you like to pay?</h4>
                            </div>
    
                            <!-- Card body -->
                            <div class="card-body p-4">
                                <!-- Card options -->
                                <div class="d-sm-flex align-items-center mb-3">
                                    <h6 class="mb-2 mb-sm-0 text-dark fw-semibold">We Accept:</h6>
                                    <ul class="list-inline my-0 ms-sm-3">
                                        <li class="list-inline-item"> <a href="#"><img src="https://booking.webestica.com/assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
                                        <li class="list-inline-item"> <a href="#"><img src="https://booking.webestica.com/assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
                                        <li class="list-inline-item"> <a href="#"><img src="https://booking.webestica.com/assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
                                    </ul>
                                </div>
    
                                <!-- Form START -->
                                 <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Name on Card</label> 
                              <input class='form-control' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Card Number</label> 
                              <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                           </div>                           
                        </div>                        
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> 
                              <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> 
                              <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> 
                              <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                           </div>
                        </div>
                        <div class='mt-2'>
                         <div class="col-12 text-start">
                                        <button class="btn btn-primary mb-0">Pay Now</button>
                                    </div>
                                </div>
                     </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <!-- Payment END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
@include('layouts.footer')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});
</script>