@extends ('backend.master')
@section('main')
<h1>Author List</h1>
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
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
    <tr>
    @foreach($alist  as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
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

                    <a class="btn btn-danger" href="{{route('authorrequest.delete',$data->id)}}">Delete</a>
  
      </td>
    </tr>
    @endforeach
     
    </tr>
  </tbody>
</table>
@stop