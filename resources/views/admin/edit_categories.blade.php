@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

 <div class="col-lg-11 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h1 class="card-title">Edit Car Categories</h1>

<div class="container" style="display:flex;">
    <form action="{{ route('updatecategories', ['id' => $category->id]) }}">
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Category name</label>
            <input type="text" name="car_categories" class="input_field" value="{{$category->car_categories}}" placeholder="" style="display: block;">
            </div>
        </div>
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Bag Capacity</label>
            <input type="text" name="bag_capacities" class="input_field" value="{{$category->bag_capacities}}" placeholder="" style="display: block;">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
</div>
</div>
</div>
</div>