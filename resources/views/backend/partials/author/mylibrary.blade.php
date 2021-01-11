@extends ('backend.master')
@section('main')
<h1>My Library</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mylibrary  as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->book_name}}</td>
      <td>{{$data->book}}</td>
      <td>
                   <a class="btn btn-warning" href="">view</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop