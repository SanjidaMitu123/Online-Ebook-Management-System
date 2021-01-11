@extends ('backend.master')
@section('main')
<h1>Reader List</h1>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">No#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($list  as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_no}}</td>
      <td>{{$data->image}}</td>
      <td>
                    <a class="btn btn-warning" href="">view</a>
                    <a class="btn btn-warning" href="">update</a>
                    <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop