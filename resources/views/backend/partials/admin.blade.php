@extends ('backend.master')
@section('main')
<h1>Admin List</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>

  @foreach($ulist as $data)
    <tr>
      <th scope="row">{{$data -> id}}</th>
      <td>{{$data -> name}}</td>
      <td>{{$data -> email}}</td>
      <td>{{$data -> image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop