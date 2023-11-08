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
 <h1 class="card-title" style="position: relative;right: 0%; color:black;" >Add Blogs</h1>
</div>
    
    <div class="card-body">


    <form action="{{ route('postblogs') }}" method="POST" class="register-form" id="car-form" novalidate enctype="multipart/form-data">
                @csrf

                 <div class="img" style="text-align: center;">
     
                                        <label><img id="blah" src="@if(isset($img)){{asset($img);}}@else https://statinfer.com/wp-content/uploads/dummy-user.png @endif" alt="your image" style=" border-radius: 50% ;width: 100px; height: 100px" />

                                                 <input type="file" name="img"
                                                  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="display: none;"></label>
                                    </div>

                <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Title</label>
            <input type="text" name="title" class="signin-input col-md-12" value="{{ old('title') }}" placeholder="" >
            
        </div>

        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Category</label>
            <input type="text" name="category" class="signin-input col-md-12" value="{{ old('category') }}" placeholder="" >
            
        </div>

         <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Written By</label>
            <input type="text" name="written_by" class="signin-input col-md-12" value="{{ old('written_by') }}" placeholder="" >
            
        </div>

                <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

            <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Editor</label>
            <textarea class="ckeditor" id="editor" name="editor" cols="35" rows="20"></textarea>
            
        </div>
       <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   

</div>
</div>
</div>
</div>
</section>
</div>
</main>