

<div id="comment_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add a Comment</h4>
		      </div>
   
<div class="modal-body">
	<div style="font-family: 'El Messiri', sans-serif; font-size: 16px; ">

		<form action="{{ route('comment.store') }}" method="POST">
			{{ csrf_field() }}

			<input type="hidden" name="p_id" id="p_id" value="{{ $poem->id }}">

			<div class="form-group">
			    <label for="body">Write your comment:</label>
			    <textarea class="form-control" id="body" name="body" rows="4" placeholder="enter comments here..." required></textarea>
			 </div>
		
		<div class="modal-footer">
	        <button type="submit" class="btn btn-success" id="publish">Add Comment</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>

		 <p>@include('errors.errors')</p>   
	   </form>
    </div>
</div>

		</div>
	</div>
</div>
