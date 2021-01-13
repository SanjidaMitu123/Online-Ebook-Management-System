@extends ('backend.master')
@section('main')



<h1>All Written Page</h1>
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
      <th scope="col">Topic name</th>
      <th scope="col">description</th>
      <th scope="col">page no</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $allpage  as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->topic_name}}</td>
      
      <td>
                   <a class="btn btn-warning" href="{{route('page.view',$data->id)}}">view</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="{{route('page.delete',$data->id)}}">Delete</a>
      </td>
      <td>{{$data->page_no}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop