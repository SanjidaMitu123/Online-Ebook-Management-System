@extends ('backend.master')
@section('main')
<h1>Ebook List Written by Author</h1>
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
      <th scope="col">Book Category</th>
      <th scope="col">Author Name</th>
      <th scope="col">Published Year</th>
      <th scope="col">Addition No </th>
      <th scope="col">About the book</th>
      <th scope="col">book Preview</th>
      <th scope="col">Book </th>
      <th scope="col">Book Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($aelist  as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->book_name}}</td>
      <td>{{$data->category}}</td>
      <td>{{$data->author_name}}</td>
      <td>{{$data->year}}</td>
      <td>{{$data->addition}}</td>
      <td>{{$data->about_book}}</td>
      <td>{{$data->book_preview}}</td>
      <td>{{$data->book}}</td>
      <td>{{$data->book_image}}</td>
      <td>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>



@stop