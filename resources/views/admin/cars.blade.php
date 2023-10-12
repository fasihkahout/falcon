@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

<div class="container" style="display:flex;">
  <div class="row mb-2">
    <div class="mb-3">
      <label for="cnic"> Category Name :</label>
      <select class="form-control" name="category" >
        @foreach ($categories as $category)
          <option value="{{$category->car_categories}}">{{$category->car_categories}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">Car image</label>
      <input type="file" class="input_field" placeholder="" style="display: block;">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">Car Name</label>
      <input type="text" class="input_field" placeholder="" style="display: block;">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">Car Model</label>
      <input type="text" class="input_field" placeholder="" style="display: block;">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">Car Type</label>
      <input type="text" class="input_field" placeholder="" style="display: block;">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">Seats</label>
      <input type="text" class="input_field" placeholder="" style="display: block;">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label" style="display: block;">AC or Non AC</label>
      <input type="text" class="input_field" placeholder="" style="display: block;">
    </div>
  </div>
  
</div>
<button type="submit" class="btn btn-primary" style="margin-left:2%;">Submit</button>
</main>
