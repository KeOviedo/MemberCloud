<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap -->

<table class="table table-striped">
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
                <input class="btn btn-primary btn-md" type="button" onclick="location.href='/membercloud/public';" value="Return" />

                <form action="{{url('/patients/'.$list->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-warning btn-md" onclick="return confirm('Do you want to delete?')" type="submit" value="Delete">
                </form>
                <form action="{{url('/patients/'.$list->id.'/edit')}}" method="post">
                    @csrf
                    {{method_field('GET')}}
                    <input class="btn btn-warning btn-md" type="submit" value="Edit">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>