@extends ('backend.master')
@section('main')
<h1>Reader List</h1>
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
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
  @foreach($list  as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_no}}</td>
      <td>{{$data->image}}</td>
      <td>
                    <a class="btn btn-danger" href="{{route('authorrequest.delete',$data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop