@extends('frontend.master')
@section('main')

<h1>Update Book Info</h1>
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
       

        <div style="float:left;width: 47%;">

<form method="post" action="{{route('mybook.update',$allbook->id)}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="book_name">Book Name:</label>
                                <input value="{{$allbook->book_name}}" name="book_name" type="text" class="form-control" id="book_name" placeholder="Enter book name" required>
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
                                <input value="{{$allbook->author_name}}" name="author_name" type="text" class="form-control" id="author_name" placeholder="Enter Author Name" required>
                            </div>
                            <div class="form-group">
                                <label for="year">Published Year :</label>
                                <input value="{{$allbook->year}}" name="year" type="number" class="form-control" id="year" placeholder="Enter year" required>
                            </div>
                            <div class="form-group">
                                <label for="addition">Addition No : </label>
                                <input  value="{{$allbook->addition}}" name="addition" type="text" class="form-control" id="addition" placeholder="Enter Addition " required>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="book">Add   book:</label>
                                <input value="{{$allbook->book}}" name="book" type="file" class="form-control" id="book" required>
                            </div>

                            
                            <div class="form-group">

                                <button type="submit" class="btn btn-success">update</button>
                            </div>
  
                      </form>
</div>

@stop