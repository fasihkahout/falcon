@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h1 class="card-title" style=" color:black;" >Cars</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addcars')}}"><button id="add-category-btn" class="btn btn-success">Add Cars</button></a>
      </div>
      <section id="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Car Image</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Car Categories</th>
                                            <th>Seats</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $car)
                                    <tr>
                                      <td><img src="{{ asset( $car->img) }}" alt="Car Image" style=" border-radius: 100% ;width: 50px;"></td>
                                        <td>{{$car->name}}</td>
                                        <td>{{$car->model}}</td>
                                        <td>{{isset($car->categories->car_categories)?$car->categories->car_categories:'N/A'}}</td>
                                        <td>{{$car->seats}}</td>
                                        <td>
                                         <a  class="btn btn-primary"  href="{{'editcars/'.$car->id}}" >Edit</a>
                                        <a class="btn btn-primary" href="{{ route('deletecars', ['id' => $car->id]) }}" >Delete</a>
                                             
                                        </td>
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
