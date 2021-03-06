<div id="quote_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Submit a Quote</h4>
		      </div>
   
<div class="modal-body">
	<div style="font-family: 'El Messiri', sans-serif; font-size: 16px; ">

		<form action="{{ route('quotes.store') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
			    <label for="body">Body:</label>
			    <textarea class="form-control" id="body" name="body" rows="8" placeholder="enter quote here..." required></textarea>
			 </div>
		
		<div class="modal-footer">
	        <button type="submit" class="btn btn-success" id="publish">Publish</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>

		 <p>@include('errors.errors')</p>   
	   </form>
    </div>
</div>

		</div>
	</div>
</div>
