<div id="edit_poem" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Submit a Poem</h4>
		      </div>
   
<div class="modal-body">
	<div style="font-family: 'El Messiri', sans-serif; font-size: 16px; ">

		<form action="{{ route('poems.update') }}" method="POST">
			{{ csrf_field() }}

			<input type="hidden" name="p_id" value="{{ $poem->id }}">

			<div class="form-group">
			    <label for="title">Title:</label>
			    <input type='text' class="form-control" id="title" name="title" value="{{ $poem->title }}" " required>
			</div>


			<div class="form-group">
			    <label for="body">Body:</label>
			    <textarea class="form-control" id="body" name="body" rows="8" placeholder="enter poem here....." required>{{ $poem->body }}</textarea>
			 </div>
		
		<div class="modal-footer">
	        <button type="submit" class="btn btn-success" id="update">Update</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>

		 <p>@include('errors.errors')</p>   
	   </form>
    </div>
</div>

		</div>
	</div>
</div>
