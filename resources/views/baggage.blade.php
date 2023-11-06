@include('layouts.header')
@if (session('success'))
    <div class="alert alert-success mt-25">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mt-25">
        {{ session('error') }}
    </div>
@endif

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
                <a href="index.html"><img src="{{asset('assets/img/logologht.png')}}" alt="logo"></a>
            </div>
            <p>Everything your taxi business needs is already here! Ridek, a theme made for taxi service companies.</p>
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

    <div class="col-md-12">
        <div class="d-flex flex-column flex-md-row">
            <div class="col-md-6 px-4 px-md-0" style="background-color: #2A448D;">
                <div class="box-custom-2-bg d-inline ">



                    <h2 class="wow fadeIn text-white text-center mt-5 ">Book Your Airport Transfers</h2>

                    <p class="big wow fadeIn text-white text-center" data-wow-delay=".2s">Trust the leading and the
                        most<br>reliable
                        journey
                        everywhere.</p>
                    <!-- RD Mailform-->
                   
                        <div class="rd-form rd-mailform form-style-1 py-4 mb-5" >

                        <div class="form-wrap-2 d-flex flex-md-row justify-content-center ">
                            <div class="form-button">
                                <button
                                    class="btn-sm button-block button-secondary button-winona bttn bttn1 mb-2 ms-md-0 me-3"
                                    type="button" id="oneway_btn">Baggage Transfer</button>
                            </div>
                            <!-- <div class="form-button ">
                                <button
                                    class="btn-sm button-block button-secondary button-winona   bttn bttn2 mb-2 ms-md-0 me-3"
                                    type="button" id="returnway_btn">Round Trip</button>
                            </div> -->
                        </div>
<script src="https://cdn.getaddress.io/scripts/getaddress-autocomplete-1.1.3.min.js">
</script>
 <form class="rd-form rd-mailform form-style-1" action="{{ route('baggagepost') }}" method="POST" novalidate enctype="multipart/form-data" >
                             @csrf

                        <div id="onewayform">
                            <div class="form-wrap ">
                                <input class="form-input " name="pickup_destination" id="pickup_destination" type="text"
                                    placeholder="enter pickup location"
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Pick-up</label>
                            </div>

                             <div class="form-wrap mt-2">
                                <input class="form-input " name="latitude" id="latitude" type="hidden"
                                    placeholder="enter your drop-off" 
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Latitude</label>
                            </div>
                             <div class="form-wrap mt-2">
                                <input class="form-input " name="longitude" id="longitude" type="hidden"
                                    placeholder="enter your drop-off" 
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Longitude</label>
                            </div>
                            <div class="form-wrap mt-2">
                                <input class="form-input " name="dropoff_destination" id="dropoff_destination" type="text"
                                    placeholder="enter your drop-off" 
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Drop Off</label>
                            </div>

                             <div class="form-wrap mt-2">
                                <input class="form-input " name="latitude1" id="latitude1" type="hidden"
                                    placeholder="enter your drop-off" 
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location"></label>
                            </div>
                             <div class="form-wrap mt-2">
                                <input class="form-input " name="longitude1" id="longitude1" type="hidden"
                                    placeholder="enter your drop-off" 
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location"></label>
                            </div>

                            <div class="form-wrap mt-2">
    <input class="form-input" name="distance" id="distance" type="hidden" placeholder="enter your drop-off">
    <label class="form-label d-flex flex-md-row justify-content-between" for="form-location"></label>
</div>


                            
                           <div class="form-wrap ">
                                <input class="form-input " name="length" id="length" type="text"
                                    placeholder="enter length"
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Length</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="form-input " name="width" id="width" type="text"
                                    placeholder="enter width"
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Width</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="form-input " name="weight" id="weight" type="text"
                                    placeholder="enter weight"
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Weight</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="form-input " name="height" id="height" type="text"
                                    placeholder="enter height"
                                    >
                                <label class="form-label d-flex flex-md-row justify-content-between "
                                    for="form-location">Height</label>
                            </div>
                            <div class="d-flex flex-row  m-auto mt-0 mb-5 " style="width: 90%;">
                                <div class="form-wrap  " style="width: 90%;">
                                    <input class="form-input " id="pickup_date" type="date" placeholder="28-09-2023"
                                        name="pickup_date" onclick="calculateDistance()" >
                                    <label class="form-label d-flex flex-md-row justify-content-between "
                                        for="form-location">Pickup-date</label>
                                </div>
                                <div class="form-wrap mt-0 pt-0 " style="width: 90%;">
                                    <input class="form-input " id="pickup_time" type="time" placeholder="12:00"
                                        name="pickup_time" >
                                    <label class="form-label d-flex flex-md-row justify-content-between "
                                        for="form-location"><i class="fa-regular fa-clock"></i></label>
                                </div>

                            </div>

                           <!--  <div class="form-wrap-2 d-flex flex-md-row justify-content-center mt-3">
                                <div class="form-button me-2">
                                    <button
                                        class="btn-sm button-block button-secondary button-winona mb-3 me-2 ms-md-0 bttn"
                                        type="button" id="returnway_btn1">Add Return</button>
                                </div>
                                <div class="form-wrap-2">
                                         <div class="dropdown">
    <a class="btn-sm button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        <span class="counter" id="counter">1</span>
    </a>
    <ul class="dropdown-menu">
        <li class="mb-3">
            <a class="dropdown-item fw-bold" style="font-size: .8rem;" href="#">
                Adults <span class="agespan"> (16+ years) :</span>
            </a>
            <div class="d-flex flex-row justify-content-center">
                <div class="fs-4 decrement">-</div>
                <input class="count fs-5 mx-4" name="adults" type="text" value="1" style="width: 10%;">
                <div class="fs-4 increment">+</div>
            </div>
        </li>
        <li class="mb-3">
            <a class="dropdown-item fw-bold" style="font-size: .8rem;" href="#">
                Childrens <span class=" agespan"> (2-15 years) :</span>
            </a>
            <div class="d-flex flex-row justify-content-center">
                <div class="fs-4 decrement">-</div>
                <input class="count fs-5 mx-4" name="childrens" type="text" value="1" style="width: 10%;">
                <div class="fs-4 increment">+</div>
            </div>
        </li>
        <li class="mb-3">
            <a class="dropdown-item fw-bold" style="font-size: .8rem;" href="#">
                Infants <span class=" agespan"> (0-2 years) :</span>
            </a>
            <div class="d-flex flex-row justify-content-center">
                <div class="fs-4 decrement">-</div>
                <input class="count fs-5 mx-4" name="infants" type="text" value="1" style="width: 10%;">
                <div class="fs-4 increment">+</div>
            </div>
        </li>
    </ul>
</div>

<div class="form-wrap mt-2">
    <input class="form-input" name="passengers" id="passengers" type="hidden" placeholder="">
    <label class="form-label d-flex flex-md-row justify-content-between" for="form-location"></label>
</div>
 -->
<!--                                 </div>


                            </div> -->


                           


                            <div class="form-wrap-2 d-flex justify-content-center">
                                <div class="form-button">
    <button type="submit" name="one_way" value= "One Way" class="btn-sm button-block button-secondary button-winona" >Search Booking</button>
</div>
                            </div>
                        </div>

                    </form>

<script>
    getAddress.autocomplete('pickup_destination','PjXdv-b2CUmkF2wMmcavnA40883',{output_fields:{latitude:'latitude',longitude:'longitude'}});
</script>
<script>
    getAddress.autocomplete('dropoff_destination','PjXdv-b2CUmkF2wMmcavnA40883',{output_fields:{latitude:'latitude1',longitude:'longitude1'}});
</script>

                   
                </div>
            </div>
        </div>
            <div class="col-md-6 px-4 px-md-0">
                <img src="{{asset('assets/img/idnex-1-747x597.png')}}" alt="" style="padding-top: 20%;">
            </div>

        </div>

    </div>


   

    <section class="cta-section padding">
        <div class="cta-men wow fade-in-bottom" data-wow-delay="200ms"></div>
        <div class="container">
            <div class="cta-content" style="text-align: left;">
                <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new
                    technologies.
                </p>
                <div class="cta-call">
                   <i class="fa-solid fa-phone-volume"></i>
                    <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                </div>
            </div>
        </div>
    </section>

@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>




<script>
    $(document).ready(function () {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });
</script>

<script>
    $(document).ready(function () {
        $("#latitudeArea1").addClass("d-none");
        $("#longtitudeArea1").addClass("d-none");
    });
</script>
<script>
    $(document).ready(function () {
        $("#latitudeArea2").addClass("d-none");
        $("#longtitudeArea2").addClass("d-none");
    });
</script>
<script>
    $(document).ready(function () {
        $("#latitudeArea3").addClass("d-none");
        $("#longtitudeArea3").addClass("d-none");
    });
</script>
<script>
    $(document).ready(function () {
        $("#latitudeArea4").addClass("d-none");
        $("#longtitudeArea4").addClass("d-none");
    });
</script>
<script>
    $(document).ready(function () {
        $("#latitudeArea5").addClass("d-none");
        $("#longtitudeArea5").addClass("d-none");
    });
</script>

<script>
    window.addEventListener('load', initialize);

    function initialize() {
        var input = document.getElementById('pickup_destination');

        input.addEventListener('input', function () {
            var pickupLocation = input.value.trim();

            if (pickupLocation !== '') {
                // Get the GetAddress API key from the Laravel environment
                var apiKey = '{{ env("GETADDRESS_IO_API_KEY") }}';

                // Make the GetAddress API request for autocomplete suggestions
                fetch(`https://api.getAddress.io/autocomplete/${pickupLocation}?api-key=${apiKey}`)
                    .then(response => response.json())
                    .then(data => {
                        // Process the autocomplete suggestions and update your UI
                        console.log('Autocomplete Suggestions:', data);
                        // Implement your UI update logic here
                    })
                    .catch(error => {
                        console.error('Error fetching autocomplete data from GetAddress API:', error);
                    });
            }
        });
    }
</script>

<script>
    window.addEventListener('load', initialize);

    function initialize() {
        var input = document.getElementById('dropoff_destination');

        input.addEventListener('input', function () {
            var dropoffLocation = input.value.trim();

            if (dropoffLocation !== '') {
                // Get the GetAddress API key from the Laravel environment
                var apiKey = '{{ env("GETADDRESS_IO_API_KEY") }}';

                // Make the GetAddress API request for autocomplete suggestions
                fetch(`https://api.getAddress.io/autocomplete/${dropoffLocation}?api-key=${apiKey}`)
                    .then(response => response.json())
                    .then(data => {
                        // Process the autocomplete suggestions and update your UI
                        console.log('Autocomplete Suggestions:', data);
                        // Implement your UI update logic here
                    })
                    .catch(error => {
                        console.error('Error fetching autocomplete data from GetAddress API:', error);
                    });
            }
        });
    }
</script>





<!-- <script>
    window.addEventListener('load', initialize1);

    function initialize1() {
        var input = document.getElementById('dropoff_destination');
        var autocomplete = new google.maps.places.Autocomplete(input, { componentRestrictions: { country: 'GB' } });

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude1').val(place.geometry['location'].lat());
            $('#longitude1').val(place.geometry['location'].lng());

            $("#latitudeArea1").removeClass("d-none");
            $("#longtitudeArea1").removeClass("d-none");
        });
    }
</script> -->

<script>
    window.addEventListener('load', initialize);

    function initialize() {
        var input1 = document.getElementById('pickup_destination1');
        var autocomplete1 = new google.maps.places.Autocomplete(input1, { componentRestrictions: { country: 'GB' } });

        autocomplete1.addListener('place_changed', function () {
            var place = autocomplete1.getPlace();
            $('#latitude2').val(place.geometry['location'].lat());
            $('#longitude2').val(place.geometry['location'].lng());

            $("#latitudeArea2").removeClass("d-none");
            $("#longtitudeArea2").removeClass("d-none");
        });
    }
</script>



<script>
    window.addEventListener('load', initialize1);

    function initialize1() {
        var input1 = document.getElementById('dropoff_destination1');
        var autocomplete = new google.maps.places.Autocomplete(input1, { componentRestrictions: { country: 'GB' } });

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude3').val(place.geometry['location'].lat());
            $('#longitude3').val(place.geometry['location'].lng());

            $("#latitudeArea3").removeClass("d-none");
            $("#longtitudeArea3").removeClass("d-none");
        });
    }
</script>

<script>
    window.addEventListener('load', initialize1);

    function initialize1() {
        var input1 = document.getElementById('pickup_destination2');
        var autocomplete = new google.maps.places.Autocomplete(input1, { componentRestrictions: { country: 'GB' } });

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude4').val(place.geometry['location'].lat());
            $('#longitude4').val(place.geometry['location'].lng());

            $("#latitudeArea4").removeClass("d-none");
            $("#longtitudeArea4").removeClass("d-none");
        });
    }
</script>

<script>
    window.addEventListener('load', initialize1);

    function initialize1() {
        var input1 = document.getElementById('dropoff_destination2');
        var autocomplete = new google.maps.places.Autocomplete(input1, { componentRestrictions: { country: 'GB' } });

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude5').val(place.geometry['location'].lat());
            $('#longitude5').val(place.geometry['location'].lng());

            $("#latitudeArea5").removeClass("d-none");
            $("#longtitudeArea5").removeClass("d-none");
        });
    }
</script>


<script>
    function calculateDistance() {
        var originLat = $('#latitude').val();
        var originLng = $('#longitude').val();
        var destLat = $('#latitude1').val();
        var destLng = $('#longitude1').val();

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [{ lat: parseFloat(originLat), lng: parseFloat(originLng) }],
            destinations: [{ lat: parseFloat(destLat), lng: parseFloat(destLng) }],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.IMPERIAL, // Set to IMPERIAL for miles
        }, function(response, status) {
            if (status === 'OK') {
                var distance = response.rows[0].elements[0].distance.text;
                // Update the value of the hidden input field
                $('#distance').val(distance);
            } else {
                console.error('Error calculating distance: ' + status);
            }
        });
    }
</script>

<script>
    function calculateDistance1() {
        var originLat = $('#latitude2').val();
        var originLng = $('#longitude2').val();
        var destLat = $('#latitude3').val();
        var destLng = $('#longitude3').val();

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [{ lat: parseFloat(originLat), lng: parseFloat(originLng) }],
            destinations: [{ lat: parseFloat(destLat), lng: parseFloat(destLng) }],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.IMPERIAL, // Set to IMPERIAL for miles
        }, function(response, status) {
            if (status === 'OK') {
                var distance = response.rows[0].elements[0].distance.text;
                // Update the value of the hidden input field
                $('#distance1').val(distance);
            } else {
                console.error('Error calculating distance: ' + status);
            }
        });
    }
</script>

<script>
    function calculateDistance2() {
        var originLat = $('#latitude4').val();
        var originLng = $('#longitude4').val();
        var destLat = $('#latitude5').val();
        var destLng = $('#longitude5').val();

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [{ lat: parseFloat(originLat), lng: parseFloat(originLng) }],
            destinations: [{ lat: parseFloat(destLat), lng: parseFloat(destLng) }],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.IMPERIAL, // Set to IMPERIAL for miles
        }, function(response, status) {
            if (status === 'OK') {
                var distance = response.rows[0].elements[0].distance.text;
                // Update the value of the hidden input field
                $('#distance2').val(distance);
            } else {
                console.error('Error calculating distance: ' + status);
            }
        });
    }
</script>

<script>
    function updateTotalDistance() {
        // Get the values of distance1 and distance2 in miles
        var distance1 = parseFloat($('#distance1').val()) || 0;
        var distance2 = parseFloat($('#distance2').val()) || 0;

        // Calculate the total distance in miles
        var totalDistance = distance1 + distance2;

        // Update the value of the hidden input field for total distance in miles
        $('#totalDistance').val(totalDistance + ' mi');
    }
</script>


<script>
      document.addEventListener("DOMContentLoaded", function () {
    const incrementButtons = document.querySelectorAll(".increment");
    const decrementButtons = document.querySelectorAll(".decrement");
    const adultsInput = document.querySelector('input[name="adults"]');
    const childrensInput = document.querySelector('input[name="childrens"]');
    const infantsInput = document.querySelector('input[name="infants"]');
    const counterElement = document.getElementById("counter");
    const passengersInput = document.getElementById("passengers");

    let adultsCount = 1;
    let childrensCount = 1;
    let infantsCount = 1;

    function updateCounter() {
        const total = adultsCount + childrensCount + infantsCount;
        counterElement.textContent = total;
        passengersInput.value = total; // Update the "passengers" input field
    }

    incrementButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            event.stopPropagation();
            const inputField = button.parentElement.querySelector(".count");
            let value = parseInt(inputField.value) || 0;
            value++;
            inputField.value = value;
            inputField.setAttribute("value", value);

            if (inputField.name === "adults") {
                adultsCount = value;
            } else if (inputField.name === "childrens") {
                childrensCount = value;
            } else if (inputField.name === "infants") {
                infantsCount = value;
            }

            updateCounter();
        });
    });

    decrementButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            event.stopPropagation();
            const inputField = button.parentElement.querySelector(".count");
            let value = parseInt(inputField.value) || 0;
            if (value > 0) {
                value--;
                inputField.value = value;
                inputField.setAttribute("value", value);

                if (inputField.name === "adults") {
                    adultsCount = value;
                } else if (inputField.name === "childrens") {
                    childrensCount = value;
                } else if (inputField.name === "infants") {
                    infantsCount = value;
                }

                updateCounter();
            }
        });
    });

    adultsInput.addEventListener("input", updateCounter);
    childrensInput.addEventListener("input", updateCounter);
    infantsInput.addEventListener("input", updateCounter);
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const incrementButtons = document.querySelectorAll(".increment1");
        const decrementButtons = document.querySelectorAll(".decrement1");
        const adultsInput = document.querySelector('input[name="adults1"]');
        const childrensInput = document.querySelector('input[name="childrens1"]');
        const infantsInput = document.querySelector('input[name="infants1"]');
        const counterElement = document.getElementById("counter1");
        const passengersInput = document.getElementById("passengers1");

        let adultsCount = 1;
        let childrensCount = 1;
        let infantsCount = 1;

        function updateCounter() {
            const total = adultsCount + childrensCount + infantsCount;
            counterElement.textContent = total;
            passengersInput.value = total; // Update the "passengers" input field
        }

        incrementButtons.forEach((button) => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                const inputField = button.parentElement.querySelector(".count");
                let value = parseInt(inputField.value) || 0;
                value++;
                inputField.value = value;
                inputField.setAttribute("value", value);

                if (inputField.name === "adults1") {
                    adultsCount = value;
                } else if (inputField.name === "childrens1") {
                    childrensCount = value;
                } else if (inputField.name === "infants1") {
                    infantsCount = value;
                }

                updateCounter();
            });
        });

        decrementButtons.forEach((button) => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                const inputField = button.parentElement.querySelector(".count");
                let value = parseInt(inputField.value) || 0;
                if (value > 0) {
                    value--;
                    inputField.value = value;
                    inputField.setAttribute("value", value);

                    if (inputField.name === "adults1") {
                        adultsCount = value;
                    } else if (inputField.name === "childrens1") {
                        childrensCount = value;
                    } else if (inputField.name === "infants1") {
                        infantsCount = value;
                    }

                    updateCounter();
                }
            });
        });

        adultsInput.addEventListener("input", updateCounter);
        childrensInput.addEventListener("input", updateCounter);
        infantsInput.addEventListener("input", updateCounter);
    });
</script>

 <script >$('#returnway_btn1').click(function (e) {
                e.preventDefault();
                $('#onewayform').hide();
                $('#roundwayform').show();

            })</script>

