@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('admin.navbar')
<h1 class="card-title" style="position: relative;right: 0%; color:black;" >Edit Profile</h1>
    <div class="card" >
    <div class="card-body">
       <div class = "container1 d-flex justify-content-center py-3">
        
 
           
            <form action="{{ route('updateProfile', ['id' => $profile->id]) }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="name">Name</label>
                    <input class="signin-input" id="name" type="text" placeholder="..." name="name"  value="{{ $profile->name }}">
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="model">E-mail</label>
                    <input class="signin-input" id="email" type="text" placeholder="..." name="email"  value="{{ $profile->email }}" readonly>
                    
                </div>

                <div class="form-wrap">
                  <label class="login-label d-flex flex-md-row justify-content-between" for="type">Password</label>
                    <input class="signin-input" id="password" type="text" placeholder="..." name="password"  >
                    
                </div>

          <div class="form-wrap">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
  </div>
</main>
