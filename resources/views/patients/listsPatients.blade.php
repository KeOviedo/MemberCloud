<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- /////////////////////////////////////// -->
<html style="background-color: #ececec;">


<div class="content" style="background-color: #ececec;">
    <div><br></div>
    <div class="card" style="width: 70%; margin: auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="POST" action="{{url('/patients')}}">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Member Cloud</legend>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">First Name</label>
                                            <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Last Name</label>
                                            <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Phone</label>
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Email Address</label>
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Street Address</label>
                                            <input id="street_address" name="street_address" type="text" placeholder="Street Address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Address Line 2</label>
                                            <input id="address_line_2" name="address_line_2" type="text" placeholder="Address Line 2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">City</label>
                                            <input id="fk_city_id" name="fk_city_id" type="text" placeholder="City" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">State</label>
                                            <input id="fk_state_id" name="fk_state_id" type="text" placeholder="State" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Country</label>
                                            <input id="fk_country_id" name="fk_country_id" type="text" placeholder="Country" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Zip Code</label>
                                            <input id="zip_code" name="zip_code" type="number" placeholder="Zip Code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Update By</label>
                                            <input id="updated_by" name="updated_by" type="text" placeholder="Update By" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-10 text-right">
                                    <button type="submit" onclick="miFunc1()" class="btn btn-primary btn-md">Add</button>
                                    <!-- <input class="btn btn-primary btn-md" type="button" onclick="location.href='patients/{patient}';" value="List" /> -->
                                    <!-- <a href="{{url('/patients/{patient}')}}">List</a> -->

                                </div>

                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div><br></div>


</div>

</html>
<script>
    function miFunc1() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>


<!-- ///////////////////////////////////// -->
<!-- Bootstrap -->
<div class="content" style="background-color: #ececec;">
    <div><br></div>
    <div class="card" style="width: 90%; margin: auto;">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">first_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">street_address</th>
                    <th scope="col">address_line_2</th>
                    <th scope="col">fk_city_id</th>
                    <th scope="col">fk_state_id</th>
                    <th scope="col">fk_country_id</th>
                    <th scope="col">zip_code</th>
                    <th scope="col">updated_by</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $list)
                <tr>
                    <td>{{ $list->id}}</td>
                    <td>{{ $list->first_name}}</td>
                    <td>{{ $list->last_name}}</td>
                    <td>{{ $list->phone}}</td>
                    <td>{{ $list->email}}</td>
                    <td>{{ $list->street_address}}</td>
                    <td>{{ $list->address_line_2}}</td>
                    <td>{{ $list->fk_city_id}}</td>
                    <td>{{ $list->fk_state_id}}</td>
                    <td>{{ $list->fk_country_id}}</td>
                    <td>{{ $list->zip_code}}</td>
                    <td>{{ $list->updated_by}}</td>
                    <td>
                        <!-- <input class="btn btn-primary btn-md" type="button" onclick="location.href='/membercloud/public';" value="Return" /> -->
                        <button title="Return" class="btn btn-primary btn-md" onclick="location.href='/membercloud/public';"><i class="fas fa-undo"></i></button>


                        <form action="{{url('/patients/'.$list->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <!-- <input class="btn btn-warning btn-md" onclick="miFunc('{{$list->id}}')" type="submit" value="Delete"> -->
                            <button title="Delete" type="submit" class="btn btn-warning btn-md" onclick="miFunc('{{$list->id}}')"><i class="fas fa-trash-alt"></i></button>
                        </form>


                        <form action="{{url('/patients/'.$list->id.'/edit')}}" method="post">
                            @csrf
                            {{method_field('GET')}}
                            <!-- <input class="btn btn-warning btn-md" type="submit" value="Edit" > -->
                            <button title="Edit" type="submit" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></button>

                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div><br></div>
</div>
<script>
    function miFunc(valor) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                $.ajax({
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{url('/patients/')}}" + "/" + valor,
                    success: function(msg) {
                        // console.log(msg);
                        location.href = 'http://localhost/membercloud/public/patients/{patient}';
                    },
                    error: function() {
                        alert('mal:' + valor);
                    }
                });
            }
        })
    }
</script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>