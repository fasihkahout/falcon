@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h2 class="card-title" style=" color:black;" >Baggage Transfer</h2>
       @if(Auth::user()->hasRole('User'))
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{route('baggage')}}"><button id="add-category-btn" class="btn btn-success">Baggage Transfer</button></a>
      </div>
      @endif
      <!-- <div style="position: relative;left: 40%; bottom:2em">
        
       <form action="{{ route('bookings') }}" method="get">
    @csrf
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date">

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date">

    <button type="submit" >Filter Bookings</button>
</form>
      </div> -->
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
                                            <th>Length</th>
                                            <th>Width</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                           <th>Price</th>
                                           <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($baggages as $baggage)
                                    <tr>
                                        <td>{{isset($baggage->users->name)?$baggage->users->name:'N/A'}}</td>
                                        <td>{{isset($baggage->cars->name)?$baggage->cars->name:'N/A'}}</td>
                                        <td>{{$baggage->pickup_destination}}</td>
                                        <td>{{$baggage->dropoff_destination}}</td>
                                        <td>{{$baggage->length}}</td>
                                        <td>{{$baggage->width}}</td>
                                        <td>{{$baggage->height}}</td>
                                        <td>{{$baggage->weight}}</td>
                                        <td>{{$baggage->distance}}</td>
                                        <td>{{$baggage->car_price}} P</td>
                                        <td>{{$baggage->created_at->format('Y-m-d')}}</td>
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
