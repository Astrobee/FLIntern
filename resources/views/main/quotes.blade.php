@extends('layouts.master')


@section('body')
	
	@include('layouts.alert')


	{{-- creating a columns of quotes --}}
<div class="container post">
	<div class="row">
		@if($quote->count() >=1)
		@foreach($quote as $q)
		
			@if($q->id % 2 ==0)
			<div class="col-sm-3">
				<p class="body"  style=" color:#33ffff;">{!! nl2br($q->body) !!} 
					<i><small style="color: grey;"> {{ $q->created_at->diffForHumans() }} </small></i>

					<br>
					<small style="color:yellow;"> {{ ucfirst($q->user->first_name ." ". $q->user->last_name) }} </small>
				</p>	
				
				
			</div>
			
			@else
			
			<div class="col-sm-3" id="odd">
				<p class="body" style="color:white;">{!! nl2br($q->body) !!} 
					<small style="color: grey;"><i> {{ $q->created_at->diffForHumans() }} </i></small>
					
					<br>
					<small style="color:yellow;"> {{ ucfirst($q->user->first_name ." ". $q->user->last_name) }} </small>
				</p>	
				
				
			</div>
			@endif

		@endforeach
		@endif
	</div>
</div>

	{{-- checking user login to add post form or register/login link --}}
@if(Auth::guard('web')->check())

	<div class="container create">
		<button class="btn btn-primary" data-toggle="modal" data-target="#quote_modal" id="create">Submit a Quote</button>
	</div>

@else
	<div class="panel">
		<div class="container create">
			<a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">Register</a></li> to publish a Quote.
		</div>
	</div>
@endif

@include('modals.create_quote')

@endsection

@section('scripts')
<script >
  // checking for success to fade out alert
  
 
 var count = {{ $errors->has('body')}}
   
        if(count)
        {
            $('#create').trigger('click');
        }
   
  </script>

  @endsection