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

                                <div class="col-12 text-center">
                                    <!-- <button type="submit" onclick="miFunc()" class="btn btn-primary btn-md">Add</button> -->
                                    <input class="btn btn-primary btn-md" type="button" onclick="location.href='patients/{patient}';" value="Start" />
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
    function miFunc() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>