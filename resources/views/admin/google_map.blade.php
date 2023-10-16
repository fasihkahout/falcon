@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

 <div class="col-lg-11 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h1 class="card-title" style="color:black;">Location</h1>

 <div class="container mt-5">
    <div class="row">
        <!-- Initial Destination -->
        <div class="col-md-6">
            <div class="form-group">
                <label style="color: black; font-weight: bold; font-size: 18px;">Initial Destination</label>


                <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">
            </div>

            <div class="form-group" id="latitudeArea">
                <label>Latitude</label>
                <input type="text" id="latitude" name="latitude" class="form-control">
            </div>

            <div class="form-group" id="longtitudeArea">
                <label>Longitude</label>
                <input type="text" name="longitude" id="longitude" class="form-control">
            </div>
        </div>

        <!-- Final Destination -->
        <div class="col-md-6">
            <div class="form-group">
                 <label style="color: black; font-weight: bold; font-size: 18px;">Final Destination</label>
                <input type="text" name="autocomplete1" id="autocomplete1" class="form-control" placeholder="Choose Location">
            </div>

            <div class="form-group" id="latitudeArea1">
                <label>Latitude</label>
                <input type="text" id="latitude1" name="latitude1" class="form-control">
            </div>

            <div class="form-group" id="longtitudeArea1">
                <label>Longitude</label>
                <input type="text" name="longitude1" id="longitude1" class="form-control">
            </div>
<button type="button" class="btn btn-primary" onclick="calculateDistance()">Submit</button>
           
        </div>
    </div>

</div>



</div>
</div>
</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>

<script>
    $(document).ready(function () {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });
</script>

<script>
    window.addEventListener('load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude').val(place.geometry['location'].lat());
            $('#longitude').val(place.geometry['location'].lng());

            $("#latitudeArea").removeClass("d-none");
            $("#longtitudeArea").removeClass("d-none");
        });
    }
</script>

<script>
    $(document).ready(function () {
        $("#latitudeArea1").addClass("d-none");
        $("#longtitudeArea1").addClass("d-none");
    });
</script>

<script>
    window.addEventListener('load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete1');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude1').val(place.geometry['location'].lat());
            $('#longitude1').val(place.geometry['location'].lng());

            $("#latitudeArea1").removeClass("d-none");
            $("#longtitudeArea1").removeClass("d-none");
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
        }, function (response, status) {
            if (status == 'OK') {
                var distance = response.rows[0].elements[0].distance.text;
                alert('Distance between initial and final destination: ' + distance);
            } else {
                alert('Error calculating distance: ' + status);
            }
        });
    }
</script>



