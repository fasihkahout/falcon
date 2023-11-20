@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('admin.navbar')
     <div class="content-body">
            <!-- Validation -->
            <section class="bs-validation">
                <div class="row justify-content-center">
     <div class="col-md-8 col-12">
    <div class="card" >
      <div class="card-header">
 <h1 class="card-title" style="position: relative;right: 0%; color:black;" >Add Car</h1>
</div>
    
    <div class="card-body">
      
      
        
 
           
            <form action="{{  route('updatecars', ['id' => $car->id]) }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf

                <div class="img" style="text-align: center;">
     
                                        <label><img id="blah" src="{{ $car->img ? asset($car->img) : asset('assets/img/idnex-1-747x597.png')}}" alt="your image" style=" border-radius: 50% ;width: 100px; height: 100px"  value="{{ $car->img }}"/>

                                                 <input type="file" name="img"
                                                  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="display: none;"></label>
                                    </div>

                <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="categories_id">Car Category</label>
                    <select class="form-select" name="categories_id">
                        @foreach ($categories as $category)
                           <option value="{{$category->id}}" @if($category->id==$car->categories_id)
                                    selected @endif>{{$category->car_categories}}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="categories_id">Bag Capacity</label>
                    <select class="form-select" name="categories_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if($category->id==$car->categories_id)
                                    selected @endif>{{$category->bag_capacities}}</option>
                        @endforeach
                    </select>
                    
                </div>

              

                <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="name">Car Name</label>
                    <input class="signin-input col-md-12" id="name" type="text" placeholder="..." name="name"  value="{{ $car->name }}">
                    
                </div>

                <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="model">Car Model</label>
                    <input class="signin-input col-md-12" id="model" type="text" placeholder="..." name="model"  value="{{ $car->model }}">
                    
                </div>

               

                <div class="mb-1">
                   <label class="login-label d-flex flex-md-row justify-content-between" for="seats">Car Seats</label>
                    <input class="signin-input col-md-12" id="seats" type="text" placeholder="..." name="seats"  value="{{ $car->seats }}">
                   
                </div>

                <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">AC or Non AC</label>
                    <input class="signin-input col-md-12" id="ac" type="text" placeholder="..." name="ac"  value="{{ $car->ac }}">
                    
                </div>
               
                 <div class="mb-1">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">First Mile Price</label>
                    <input class="signin-input col-md-12" id="first_mile_price" type="text" placeholder="..." name="first_mile_price"  value="{{ $car->first_mile_price }}">
                    
                </div>
                <div class="mb-3">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">After First Mile Price</label>
                    <input class="signin-input col-md-12" id="after_first_mile_price" type="text" placeholder="..." name="after_first_mile_price"  value="{{ $car->after_first_mile_price }}">
                    
                </div>

                 <div class="col-md-12 text-righ">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</section>
  </main>

