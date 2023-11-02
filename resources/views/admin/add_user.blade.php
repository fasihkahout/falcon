@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

 <div class="col-lg-11 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h1 class="card-title">Add User</h1>

<div class="container" style="display:flex;">
    <form action="{{ route('postusers') }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Name</label>
            <input type="text" name="name" class="input_field" value="{{ old('name') }}" placeholder="" style="display: block;">
            </div>
        </div>
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">E-mail</label>
            <input type="text" name="email" class="input_field" value="{{ old('email') }}" placeholder="" style="display: block;">
            </div>
        </div>
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Password</label>
            <input type="text" name="password" class="input_field" value="{{ old('password') }}" placeholder="" style="display: block;">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
</div>
</div>
</div>
</div>