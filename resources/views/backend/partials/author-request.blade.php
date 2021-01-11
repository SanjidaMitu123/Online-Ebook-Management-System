@extends ('backend.master')
@section('main')
<h1>Author Request List</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Qualification</th>
      <th scope="col">Number of Book Published</th>
      <th scope="col">About Book</th>
      <th scope="col">Book</th>
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
      <td>{{optional($data->author)->address}}</td>
      <td>{{optional($data->author)->qualification}}</td>
      <td>{{optional($data->author)->no_of_books_published}}</td>
      <td>{{optional($data->author)->about_books}}</td>
      <td>{{optional($data->author)->add_book}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_no}}</td>
      <td>{{$data->image}}</td>
      
      <td>
                    <a class="btn btn-danger" href="">Delete</a>
                    @if($data->is_approved == null)
                    <a class="btn btn-info" href="{{route('authorrequest.approved',$data->id)}}">not approved</a>
                    @else
                    <a class="btn btn-success" href="{{route('authorrequest.approved',$data->id)}}"> approved</a>
                    @endif




      </td>
    </tr>
    @endforeach
  </tbody>
</table>





@stop