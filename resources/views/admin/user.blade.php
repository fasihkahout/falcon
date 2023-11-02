@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h1 class="card-title" style=" color:black;" >Users</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addusers')}}"><button id="add-category-btn" class="btn btn-success">Add Users</button></a>
      </div>
      <section id="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                         <a  class="btn btn-primary"  href="{{'editusers/'.$user->id}}" >Edit</a>
                                        <a class="btn btn-primary" href="{{ route('deleteusers', ['id' => $user->id]) }}" >Delete</a>
                                             
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
