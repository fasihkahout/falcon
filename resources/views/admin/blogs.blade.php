@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h1 class="card-title" style=" color:black;" >Blogs</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addblogs')}}"><button id="add-category-btn" class="btn btn-success">Add Blogs</button></a>
      </div>
      <section id="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Written By</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                    <tr>
                                        <td><img src="{{ asset( $blog->img) }}" alt="Blog Image" style=" border-radius: 100% ;width: 50px;"></td>
                                        
                                         <td>{{ $blog->title }}</td>
                                         <td>{{ $blog->category }}</td>
                                         <td>{{ $blog->written_by }}</td>
                                      <td>{!! $blog->editor !!}</td>


                                        <td>
                                         <a  class="btn btn-primary"  href="{{'editblogs/'.$blog->id}}" >Edit</a>
                                        <a class="btn btn-primary" href="{{ route('deleteblogs', ['id' => $blog->id]) }}" >Delete</a>
                                             
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                  <script >
                                   $(document).ready( function () {
                                    $('#tables_id').DataTable();
                                });
                                  </script>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </main>
