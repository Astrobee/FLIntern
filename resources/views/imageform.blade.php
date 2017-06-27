@extends('layouts.master')


@section('body')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>Laravel Images and Jcrop</h1>
			<h4>Upload an image</h4>
		<form action=" {{ route('cropStore') }} " method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="img">Add a Profile Photo:</label>
			<input type="file" name="img" id="img" >
		</div>

		<div class="form-group">
			<input type="submit" value="Upload" class="btn btn-primary" >
		</div>	
		@include('errors.errors')	
</form>
		</div>
	</div>
</div>

@endsection