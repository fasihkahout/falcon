@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('admin.navbar')
<h1 class="card-title" style="position: relative;right: 0%; color:black;" >Edit Car</h1>
    <div class="card" >
    <div class="card-body">
       <div class = "container1 d-flex justify-content-center py-3">
        
 
           
            <form action="{{ route('updatecars', ['id' => $car->id]) }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf
                
       <div class="img">
     
                                        <label><img id="blah" src="@if(isset($car->img)){{asset($car->img);}}@else https://statinfer.com/wp-content/uploads/dummy-user.png @endif" alt="your image" style=" border-radius: 50% ;width: 100px; height: 100px" value="{{ $car->img }}" />

                                                 <input type="file" name="img"
                                                  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="display: none;"></label>
                                    </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="categories_id">Car Category</label>
                    <select class="form-select1" name="categories_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->car_categories }}</option>
                        @endforeach
                    </select>
                    
                </div>

               

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="name">Car Name</label>
                    <input class="signin-input" id="name" type="text" placeholder="..." name="name"  value="{{ $car->name }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="model">Car Model</label>
                    <input class="signin-input" id="model" type="text" placeholder="..." name="model"  value="{{ $car->model }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="type">Car Type</label>
                    <input class="signin-input" id="type" type="text" placeholder="..." name="type"  value="{{ $car->type }}">
                    
                </div>

                <div class="form-wrap">
                   <label class="login-label d-flex flex-md-row justify-content-between" for="seats">Car Seats</label>
                    <input class="signin-input" id="seats" type="text" placeholder="..." name="seats"  value="{{ $car->seats }}">
                   
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">AC or Non AC</label>
                    <input class="signin-input" id="ac" type="text" placeholder="..." name="ac"  value="{{ $car->ac }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Description</label>
                    <input class="signin-input" id="description" type="text" placeholder="..." name="description"  value="{{ $car->description }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Terms and Conditions</label>
                    <input class="signin-input" id="des" type="text" placeholder="..." name="des"  value="{{ $car->des }}">
                    
                </div>
                 <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">First Mile Price</label>
                    <input class="signin-input" id="first_mile_price" type="text" placeholder="..." name="first_mile_price"  value="{{ $car->first_mile_price }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Driver and Cab Details</label>
                    <input class="signin-input" id="driver_cab_details" type="text" placeholder="..." name="driver_cab_details"  value="{{ $car->driver_cab_details }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Inclusion</label>
                    <input class="signin-input" id="inclusion" type="text" placeholder="..." name="inclusion"  value="{{ $car->inclusion }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Exclusion</label>
                    <input class="signin-input" id="exclusion" type="text" placeholder="..." name="exclusion"  value="{{ $car->exclusion }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Safety and Guidelines</label>
                    <input class="signin-input" id="safety_guidelines" type="text" placeholder="..." name="safety_guidelines"  value="{{ $car->safety_guidelines }}">
                    
                </div>
             
<div class="form-wrap">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</main>
