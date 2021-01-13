@extends ('backend.master')
@section('main')
<h1>My Library</h1>
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">category</th>
      <th scope="col">Author Name</th>
      <th scope="col">Published Year</th>
      <th scope="col">Addition</th>
      <th scope="col">Book</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mylibrary  as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->book_name}}</td>
      <td>{{$data->category}}</td>
      <td>{{$data->author_name}}</td>
      <td>{{$data->year}}</td>
      <td>{{$data->addition}}</td>
      <td>{{$data->book}}</td>
      <td>
                   <a class="btn btn-warning" href="{{route('readbook.view',$data->id)}}">Read book</a>
                    <a class="btn btn-warning" href="{{route('mybook.edit',$data->id)}}">Edit Info</a>
                    <a class="btn btn-danger" href="{{route('mylibrary.delete',$data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop