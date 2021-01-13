@extends ('backend.master')
@section('main')
<h1>write Book</h1>
<a href="{{route('dashboard.write-book.allpage')}}">See All your Written page</a>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

    <form action="{{route('write-book')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="topic_name">Topic Name</label>
            <input name="topic_name" placeholder="Enter Topic name" type="text" class="form-control" id="topic_name" >

        </div>
     
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="summernote" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="page_no">Page No</label>
            <input name="page_no" placeholder="Enter Page No" type="text" class="form-control" id="page_no" >

        </div>

        
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@stop