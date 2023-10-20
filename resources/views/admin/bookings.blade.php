@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h1 class="card-title" style=" color:black;" >Bookings</h1>
       @if(Auth::user()->hasRole('User'))
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{route('index')}}"><button id="add-category-btn" class="btn btn-success">Create Bookings</button></a>
      </div>
      @endif
      <section id="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Pick-up Destination</th>
                                            <th>Drop-off Destination</th>
                                            <th>Flight Arrival Time</th>
                                            <th>Pick-up Date</th>
                                            <th>Pick-up Time</th>
                                           <th>Luggage</th>
                                           <th>Distance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$booking->pickup_destination}}</td>
                                        <td>{{$booking->dropoff_destination}}</td>
                                        <td>{{$booking->flight_arrival_time}}</td>
                                        <td>{{$booking->pickup_date}}</td>
                                        <td>{{$booking->pickup_time}}</td>
                                        <td>{{$booking->luggage}}</td>
                                        <td>{{$booking->distance}}</td>
                                    </tr>
                                    @endforeach
                                   
                                  <script >
                                   $(document).ready( function () {
                                    $('#tables_id').DataTable();
                                });
                                  </script>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
