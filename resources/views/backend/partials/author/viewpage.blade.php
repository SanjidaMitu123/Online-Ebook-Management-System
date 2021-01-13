@extends ('backend.master')
@section('main')


<div class="form-group">
        <p>
        <label for="">Topic Nmae:</label>{{$rewritepage->topic_name}}
        </p>

        <p>
        <label for=""></label> {{ $rewritepage->description}}
        </p>


        <p>
        <label for="">Page no:</label>{{ $rewritepage->page_no}}
        </p>


    </div>

@stop