@extends('frontend.master')
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
       

 <div style="float:right;width: 50%;" >
 <h4>My Books</h4>
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
  
                       @foreach($mbook  as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->book_name}}</td>
      <td>{{$data->book}}</td>
      <td>
                   <a class="btn btn-warning" href="">view</a>
                    <a class="btn btn-warning" href="{{route('readermybook.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('mylibrary.delete',$data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div >
<div style="float:left;width: 47%;">
<h4>Add Book</h4>

<form method="post" action="{{route('readeradd-book')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="book_name">Book Name:</label>
                                <input name="book_name" type="text" class="form-control" id="book_name" placeholder="Enter book name" required>
                            </div>
                            
                           
                            <div class="form-group">
                        <label for="category_id">Select book Category 
                        

</span>
</label>
                        <select class="form-control" name="category_id" id="category_id">
                        @foreach($clist as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                            <div class="form-group">
                                <label for="author_name">Author Name:</label>
                                <input name="author_name" type="text" class="form-control" id="author_name" placeholder="Enter Author Name" required>
                            </div>
                            <div class="form-group">
                                <label for="year">Published Year :</label>
                                <input name="year" type="number" class="form-control" id="year" placeholder="Enter year" required>
                            </div>
                            <div class="form-group">
                                <label for="addition">Addition No : </label>
                                <input name="addition" type="text" class="form-control" id="addition" placeholder="Enter Addition " required>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="book">Add   book:</label>
                                <input name="book" type="file" class="form-control" id="book" required>
                            </div>

                            
                            <div class="form-group">

                                <button type="submit" class="btn btn-success">Add book</button>
                            </div>
  
                      </form>
 </div >

@stop