{{-- CREATING A QUOTE FORM --}}

<div class="container">

<hr>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel-heading">
            	<h4>Submit a Quote</h4>
     	</div>


 		<form action="{{ route('quotes.store') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
			    <label for="title">Title:</label>
			    <input type='text' class="form-control" id="title" name="title" required>
			</div>


			<div class="form-group">
			    <label for="body">Body:</label>
			    <textarea class="form-control" id="body" name="body" rows="8" required></textarea>
			 </div>

			    <div>
			        <button type="submit" class="btn btn-primary">Publish</button>
			    <a href="{{ route('quotes') }}">Cancel</a>
			    </div>

			<p>@include('errors.errors')</p>
		</form>
		</div>
	</div>
</div>