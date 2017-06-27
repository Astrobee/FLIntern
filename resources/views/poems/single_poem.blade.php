@extends('layouts.master')


@section('body')
	
	@include('layouts.alert')


	{{-- displaying poem --}}
<div class="container post">
	
				<h4 style="color: orange;">{{ $poem->title }}</h4>
				<p class="body"  style=" color:white;">{!! nl2br($poem->body) !!} 
					<i><br>
						<small style="color: grey;"> {{ $poem->created_at->toFormattedDateString() }} -></small></i>
					  by <small style="color: yellow;">{{ ucfirst($poem->user->first_name ." ". $poem->user->last_name) }} </small>
				</p>	
</div>
<hr class="lhr">
<div class="container">
	<div class="panel panel-success" style="border: none;">
		<div class="panel-heading" style="text-align: center;">
			Comments
		</div>
			<div class="panel-body comment">
				@if($poem->comment->count() > 0)
					@foreach($poem->comment as $c)
					<p>
						<small><b>{{ $c->created_at->diffForHumans() }}: &nbsp;</b> {{ $c->body }}</small>
						<small id="name"> {{ $c->user->first_name." ".$c->user->last_name }} </small>
					</p>

					@endforeach
				@endif
			</div>
	</div>
</div>

{{-- checking user login to add comment form or register/login link --}}
@if(Auth::guard('web')->check())
	

	<div class="container create">
		<button class="btn btn-primary" data-toggle="modal" data-target="#comment_modal">Leave a Comment</button>
	</div>
@else
	<div class="panel">
		<div class="container create">
			<a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">Register</a></li> to publish a Poem.
		</div>
	</div>
@endif

@include('modals.add_comment')
@endsection

@section('scripts')

<script >
  var count = {{ $errors->has('body') }};
   
        if(count)
        {
            $('#create').trigger('click');
        }
  </script>

  @endsection