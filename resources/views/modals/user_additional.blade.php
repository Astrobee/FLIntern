<div id="add_modal" class="modal fade" role="dialog">
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
					<label for="phone">Phone Number <small>optional</small>:</label>
					<input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->phone }}">
				</div>

				<div class="form-group">
					<label for="city">City <small>optional</small>:</label>
					<input type="text" name="city" id="city" class="form-control" value="{{ Auth::user()->city }}">
				</div>

				<div class="form-group">
					<label for="region">Region <small>optional</small>:</label>
					<input type="text" name="region" id="region" class="form-control" value="{{ Auth::user()->region }}">
				</div>

				<div class="form-group">
					<label for="bio">Bio <small>optional</small>:</label>
					<textarea rows="8" name="bio" id="bio" class="form-control">{{ Auth::user()->bio }}</textarea>
				</div>

		<div class="modal-footer">
	        <button type="submit" class="btn btn-success" name="add">Update</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>
		 <p>@include('errors.errors')</p> 
	   </form>
    </div>
</div>

		</div>
	</div>
</div>
