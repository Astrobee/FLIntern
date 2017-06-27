<div id="basic_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit Info</h4>
		      </div>
   
<div class="modal-body">
	<div style="font-family: 'El Messiri', sans-serif; font-size: 16px; ">

		<form action="/user/store" method="POST"  role="form">

			{{ csrf_field() }}

				<div class="form-group">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name" id="first_name" class="form-control" value="{{ Auth::user()->first_name }}" required>
				</div>

				<div class="form-group">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" id="last_name" class="form-control" value="{{ Auth::user()->last_name }}" required>
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}"required>
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="password">Confirm Password:</label>
					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
				</div>

		<div class="modal-footer">
	        <button type="submit" class="btn btn-success" name="basic">Update</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>
		 <p>@include('errors.errors')</p> 
	   </form>
    </div>
</div>

		</div>
	</div>
</div>
