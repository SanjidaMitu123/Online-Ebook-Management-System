@extends ('backend.master')
@section('main')
<h1>add book</h1>
@if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif
       
<form method="post" action="{{route('add-book')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="book_name">Book Name:</label>
                                <input name="book_name" type="text" class="form-control" id="book_name" placeholder="Enter book name" required>
                            </div>
                            
                           
                            <div class="form-group">
                        <label for="category_id">Select book Category 
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  add category
</button>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
    <form action="{{route('category.insert')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input name="category_name" required placeholder="Enter Category name" type="text" class="form-control" id="category_name" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>



@stop