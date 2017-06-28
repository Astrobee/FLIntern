@extends('layouts.master')


@section('body')
	
	@include('layouts.alert')


	{{-- displaying poem --}}
<div class="container post">
	
				<h4 style="color: orange;">{{ $poem->title }}</h4>
				<p class="body"  style=" color:white;">{!! nl2br($poem->body) !!} 
					<i><br>
						<small style="color: grey;"> {{ $poem->created_at->diffForHumans() }} -></small></i>
					  by <small style="color: yellow;">{{ ucfirst($poem->user->first_name ." ". $poem->user->last_name) }} </small>
				</p>	

				<!-- ADDING A BUTTON TO EDIT POEM BY AUTHOR -->
@if(Auth::check())
	@if(Auth::user()->id == $poem->user_id)
		<div style="margin-left: 30%;">
			<button class="btn btn-primary glyphicon glyphicon-edit" style="text-align:right;"
			data-toggle="modal" data-target="#edit_poem">Edit</button> 
		</div>
	@endif
@endif
</div>	

<hr class="lhr">

	<!-- COMMENTS SECTION -->
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

 <!-- checking user login to add comment form or register/login link -->
@if(Auth::guard('web')->check())
	

	<div class="container" id="addcom">
		<button class="btn btn-primary" data-toggle="modal" data-target="#comment_modal" >Leave a Comment</button>
	</div>
@else
	<div class="panel">
		<div class="container" id="addcom">
			<a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">Register</a></li> to leave a comment.
		</div>
	</div>
@endif

	<!-- ADDING MODALS -->
@include('modals.add_comment')
@include('modals.edit_poem')

@endsection

@section('scripts')

	<!-- checking for comment errors so as to reopen the comment modal -->
<script >
  var count = {{ $errors->has('body') }};
   
        if(count)
        {
            $('#create').trigger('click');
        }
  </script>

  @endsection