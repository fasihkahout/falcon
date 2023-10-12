@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

<div class="container" style="display:flex;">
    <form action="{{route('postcategories')}}">
        <div class="row mb-2">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="display: block;">Category name</label>
            <input type="text" name="car_categories" class="input_field" placeholder="" style="display: block;">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
</div>

<table class="table table-striped" style="width:30%; margin-left:2%;">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->car_categories }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</main>