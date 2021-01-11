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
       
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Add Book
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  
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

  </div>
</div>

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

  </tbody>
</table>




@stop