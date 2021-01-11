@extends ('backend.master')
@section('main')
<h1>Subscription </h1>
<h5>Add Subscription Info</h5>
<!-- Large modal -->
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target=".bd-example-modal-lg">see all added subscripted info</button>



@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

    <form action="{{route('dashboard.subscription.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="subcription_name">Enter Subcription Name</label>
            <input name="subcription_name" placeholder="Enter Subcription name" type="text" class="form-control" id="subcription_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number"name="price" placeholder="Enter Price"  class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="number_of_download">Number of book they can download</label>
            <input type="number" class="form-control" name="number_of_download" id="number_of_download" >
        </div>
        <div class="form-group">
            <label for="duration">Duration(Months)</label>
            <input type="number" class="form-control" name="duration" id="duration" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <h5>Subscription Info</h5>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NO#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">no# of download</th>
      <th scope="col">Duration(Months)</th>
      <th scope="col">Description</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
 
  @foreach($slist  as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->number_of_download}}</td>
      <td>{{$data->duration}}</td>
      <td>{{$data->description}}</td>
      <td>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>

@stop