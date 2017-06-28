@extends('layouts.master')

@section('body')


	<!-- user info section -->
<div class="container " style="font-family: 'El Messiri', sans-serif; font-size: 16px; margin-top: 75px;">
	<div class="row">
		<div class="col-md-3">

			@if($image = App\Photo::count() >=1)

				@if($image = App\Photo::find(auth()->id()))
				<img src="{{ $image->path .'/'.$image->name }}" alt="Profile Photo" id="profile">
				@endif
			@else
			<h1>Profile Photo</h1>
			@endif


			<br>
			<br>

			<form action=" {{ route('profile') }} " method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="image">Add/Change Profile Photo:</label><br>
					<small><b style="color:orange;">*.jpg, *jpeg</b> and <b style="color:orange;">*.png</b> only</small><br>
					<input type="file" name="image" id="image" >
				</div>

				<div class="form-group">
					<input type="submit" value="Upload" class="btn btn-primary">
				</div>	
				@include('errors.errors')	
			</form>
		</div>

		<div class="col-md-4">
					<!-- ADDITIONAL INFO DISPLAY -->
					<table class="table table-condensed">
						<thead>
							<tr>
								<td colspan="5" id="th"> Basic Info</td>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th>First Name:</th>
								<td>{{ Auth::user()->first_name }}</td>
							</tr>

							<tr>
								<th>Last Name:</th>
								<td>{{ Auth::user()->last_name }}</td>
							</tr>

							<tr>
								<th>Email:</th>
								<td>{{ Auth::user()->email }}</td>
							</tr>

							<tr>
								<th>Gender:</th>
								<td>{{ Auth::user()->sex }}</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="col-md-5">
					<!-- ADDITIONAL INFO DISPLAY -->
					<table class="table table-condensed">
						<thead>
							<tr>
								<td colspan="5" id="th"> Additional Info</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<th>Phone:</th>
								<td>{{ Auth::user()->phone }}</td>
							</tr>

							<tr>
								<th>City:</th>
								<td>{{ Auth::user()->city }}</td>
							</tr>

							<tr>
								<th>Region:</th>
								<td>{{ Auth::user()->region }}</td>
							</tr>
							<tr>
								<th>Bio:</th>
								<td>{{ Auth::user()->bio }}</td>
							</tr>
						</tbody>
					</table>

				</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<div class="form-group" style="bottom: 8%; text-align: center;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basic_modal" id="edit"><span class="glyphicon glyphicon-edit"></span> Update Basic</button>
			</div>		
		</div>

		<div class="col-md-4 col-md-offset-2">
			<div class="form-group" style="bottom: 8%; text-align: center;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal" id="edit"><span class="glyphicon glyphicon-edit"></span> Update Additional</button>
			</div>	
		</div>
	</div>

</div>
	<!-- user info section ends -->

<!-- Modal -->
@include('modals.user_additional')
@include('modals.user_basic')


@section('scripts')
<script >
    // checking for errors to open modal
   
    var count = {{ $errors->has('name') || $errors->has('password')|| $errors->has('email') }}
   
        if(count)
        {
            $('#edit').trigger('click');
        }

  </script>
@endsection
