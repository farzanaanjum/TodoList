@extends('layout')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

{{ Session::get('message')}}
</div>
@endif

<form class="col-md-3" method="POST" action="/contact">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" >
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" >
	</div>

	<div class="form-group">
		<label>Messages</label>
		<textarea class="form-control" name="message"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection