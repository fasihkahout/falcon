@include('admin.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('admin.navbar')

     
      <h3 class="card-title" style=" color:black;" >Contact Forms Information</h3>
      <!-- <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addusers')}}"><button id="add-category-btn" class="btn btn-success">Add Users</button></a>
      </div> -->
      <section id="" style="margin-top:20px">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="overflow-x:auto;">
                                <table id="tables_id" class=" table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Phone Number</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone_number}}</td>
                                        <td>{{$contact->message}}</td>
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
