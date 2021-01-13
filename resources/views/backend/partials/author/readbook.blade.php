@extends ('backend.master')
@section('main')
<h1>read book</h1>
<p>
<iframe src="{{url('uploades/'.$viewbook->book)}}" frameborder="0"></iframe>


</p>


@stop