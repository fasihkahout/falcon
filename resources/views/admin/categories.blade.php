@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')
 <div class="col-lg-11 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h1 class="card-title">Car Categories</h1>

      
<div class="container" style="display:flex;">
    <form action="{{route('postcategories')}}">
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Category name</label>
            <input type="text" name="car_categories" class="input_field" placeholder="" style="display: block;">
            </div>
        </div>
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Bag Capacity</label>
            <input type="text" name="bag_capacities" class="input_field" placeholder="" style="display: block;">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
</div>

<table class="table table-striped" style="width:30%; margin-left:2%;">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Bag Capacity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->car_categories }}</td>
                <td>{{ $category->bag_capacities }}</td>
                <td>
                    <a  class="btn btn-primary"  href="{{'editcategories/'.$category->id}}">Edit</a>
                    <a class="btn btn-primary" href="{{ route('deletecategories', ['id' => $category->id]) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
  </div>
</div>
</div>

</main>