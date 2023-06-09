<html style="background-color: #ececec;">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="content" style="background-color: #ececec;">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div><br></div>
    <div class="card" style="width: 70%; margin: auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="POST" action="{{url('/patients/'.$patient->id)}}" name="formulario1" id="formulario1">
                        @csrf
                        {{method_field('PATCH')}}
                        <fieldset>
                            <legend class="text-center header">Edit patients</legend>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">First Name</label>
                                            <input id="first_name" name="first_name" type="text" value="{{$patient->first_name}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Last Name</label>
                                            <input id="last_name" name="last_name" type="text" value="{{$patient->last_name}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Phone</label>
                                            <input id="phone" name="phone" type="text" value="{{$patient->phone}}" class="form-control">
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
                                            <input id="email" name="email" type="text" value="{{$patient->email}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Street Address</label>
                                            <input id="street_address" name="street_address" type="text" value="{{$patient->street_address}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Address Line 2</label>
                                            <input id="address_line_2" name="address_line_2" type="text" value="{{$patient->address_line_2}}" class="form-control">
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
                                            <input id="fk_city_id" name="fk_city_id" type="text" value="{{$patient->fk_city_id}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">State</label>
                                            <input id="fk_state_id" name="fk_state_id" type="text" value="{{$patient->fk_state_id}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Country</label>
                                            <input id="fk_country_id" name="fk_country_id" type="text" value="{{$patient->fk_country_id}}" class="form-control">
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
                                            <input id="zip_code" name="zip_code" type="number" value="{{$patient->zip_code}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <label for="">Update By</label>
                                            <input id="updated_by" name="updated_by" type="text" value="{{$patient->updated_by}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-10 text-right">
                                    <button type="submit" onclick="miFunc('{{$patient->id}}')" class="btn btn-primary btn-md">Edit</button>
                                    <input class="btn btn-primary btn-md" type="button" onclick="location.href='../../patients/{patient}';" value="List" />


                                </div>

                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
<script>
    function miFunc(valor) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, edit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Edited!',
                    'Your file has been edited.',
                    'success'
                )
                $.ajax({
                    type: "PATCH",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{url('/patients/')}}" + "/" + valor,
                    success: function(msg) {
                        // alert('bien:'+valor);
                        document.formulario1.submit();

                    },
                    error: function() {
                        alert('mal:' + valor);
                    }
                });
            }
        })
    }
</script>