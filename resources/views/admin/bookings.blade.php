@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h1 class="card-title" style=" color:black;" >Bookings</h1>
       @if(Auth::user()->hasRole('User'))
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{route('index')}}"><button id="add-category-btn" class="btn btn-success">Create Bookings</button></a>
      </div>
      @endif
      <div style="position: relative;left: 40%; bottom:2em">
        
       <form action="{{ route('bookings') }}" method="get">
    @csrf
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date">

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date">

    <button type="submit" >Filter Bookings</button>
</form>
      </div>
      <section id="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Passenger Name</th>
                                            <th>Car Name</th>
                                            <th>Trip Type</th>
                                            <th>Pick-up Destination</th>
                                            <th>Drop-off Destination</th>
                                            <th>Pick-up Date</th>
                                            <th>Pick-up Time</th>
                                            <th>Return Date</th>
                                            <th>Return Time</th>
                                           <th>Luggage</th>
                                           <th>Distance</th>
                                           <th>Price</th>
                                           <th>Date and Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{isset($booking->users->name)?$booking->users->name:'N/A'}}</td>
                                        <td>{{isset($booking->cars->name)?$booking->cars->name:'N/A'}}</td>
                                        <td>{{$booking->one_way}} Trip</td>
                                        <td>{{$booking->pickup_destination}}</td>
                                        <td>{{$booking->dropoff_destination}}</td>
                                        <td>
                                            @if($booking->pickup_date)
                                                {{ $booking->pickup_date }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->pickup_time)
                                                {{ $booking->pickup_time }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->return_date)
                                                {{ $booking->return_date }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->return_time)
                                                {{ $booking->return_time }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{$booking->luggage}}</td>
                                        <td>{{$booking->distance}}</td>
                                        <td>{{$booking->car_price}} P</td>
                                        <td>{{$booking->created_at}}</td>
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
            </section>
        </main>
