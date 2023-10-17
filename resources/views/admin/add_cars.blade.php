@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('admin.navbar')
 <h1 class="card-title" style="position: relative;right: 0%; color:black;" >Add Car</h1>
    <div class="card" >
    <div class="card-body">
      <div class = "container1 d-flex justify-content-center py-3">
      
        
 
           
            <form action="{{ route('postcars') }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf

                <div class="img">
     
                                        <label><img id="blah" src="@if(isset($img)){{asset($img);}}@else https://statinfer.com/wp-content/uploads/dummy-user.png @endif" alt="your image" style=" border-radius: 50% ;width: 100px; height: 100px" />

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
                    <input class="signin-input" id="name" type="text" placeholder="..." name="name"  value="{{ old('name') }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="model">Car Model</label>
                    <input class="signin-input" id="model" type="text" placeholder="..." name="model"  value="{{ old('model') }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="type">Car Type</label>
                    <input class="signin-input" id="type" type="text" placeholder="..." name="type"  value="{{ old('type') }}">
                    
                </div>

                <div class="form-wrap">
                   <label class="login-label d-flex flex-md-row justify-content-between" for="seats">Car Seats</label>
                    <input class="signin-input" id="seats" type="text" placeholder="..." name="seats"  value="{{ old('seats') }}">
                   
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">AC or Non AC</label>
                    <input class="signin-input" id="ac" type="text" placeholder="..." name="ac"  value="{{ old('ac') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Description</label>
                    <input class="signin-input" id="description" type="text" placeholder="..." name="description"  value="{{ old('description') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">FAQ'S</label>
                    <input class="signin-input" id="des" type="text" placeholder="..." name="des"  value="{{ old('des') }}">
                    
                </div>
                 <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">First Mile Price</label>
                    <input class="signin-input" id="first_mile_price" type="text" placeholder="..." name="first_mile_price"  value="{{ old('first_mile_price') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Driver and Cab Details</label>
                    <input class="signin-input" id="driver_cab_details" type="text" placeholder="..." name="driver_cab_details"  value="{{ old('driver_cab_details') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Inclusion</label>
                    <input class="signin-input" id="inclusion" type="text" placeholder="..." name="inclusion"  value="{{ old('inclusion') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Exclusion</label>
                    <input class="signin-input" id="exclusion" type="text" placeholder="..." name="exclusion"  value="{{ old('exclusion') }}">
                    
                </div>
                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="ac">Safety and Guidelines</label>
                    <input class="signin-input" id="safety_guidelines" type="text" placeholder="..." name="safety_guidelines"  value="{{ old('safety_guidelines') }}">
                    
                </div>
                

                 <div class="form-wrap">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
