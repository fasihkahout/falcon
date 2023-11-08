@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

 <div class="content-body">
            <!-- Validation -->
            <section class="bs-validation">
                <div class="row justify-content-center">
     <div class="col-md-6 col-12">
    <div class="card" >
      <div class="card-header">
 <h1 class="card-title" style="position: relative;right: 0%; color:black;" >Edit User</h1>
</div>
    
    <div class="card-body">


    <form action="{{  route('updateusers', ['id' => $user->id]) }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf
       
            <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Name</label>
            <input type="text" name="name" class="signin-input col-md-12" value="{{$user->name}}" placeholder="" >
            
        </div>
       
            <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">E-mail</label>
            <input type="text" name="email" class="signin-input col-md-12" value="{{$user->email}}" placeholder="" >
            </div>
       
        
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Password</label>
            <input type="text" name="password" class="signin-input col-md-12" value="{{ old('password') }}" placeholder="" >
            </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   

</div>
</div>
</div>
</div>
</section>
</div>
</main>