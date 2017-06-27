@extends('layouts.master')


@section('body')
	
	@include('layouts.alert')
<aside class="sidebar">
	<b>@include('poems.sidebar_poem')</b>
</aside>

	{{-- creating a columns of poems --}}
<div class="container post">
	<div class="row">
		@if($poem->count() >=1)
		@foreach($poem as $p)

			@if($p->id % 2 ==0)
			<div class="col-sm-3">
				<a href="/poems/{{ $p->id }}"><h4 style="color: orange;">{{ $p->title }}</h4></a>
				@if(count($p->tags))
					@foreach($p->tags as $tag)
						<small>{{ $tag->name }}</small>
					@endforeach
				@endif
				<p class="body"  style=" color:white;">
					{!! nl2br($p->body) !!} 
					<i>
						<small style="color: grey;"> {{ $p->created_at->toFormattedDateString() }} </small>
					</i>
					<br>
					<small style="color:yellow;"> {{ ucfirst($p->user->first_name ." ". $p->user->last_name) }} </small>
				</p>	
				
				
			</div>
			
			@else
			
			<div class="col-sm-3" id="odd">
				<a href="/poems/{{ $p->id }}"><h4 style="color: #1a75ff;">{{ $p->title }}</h4></a>
				@if(count($p->tags))
					@foreach($p->tags as $tag)
						<small>{{ $tag->name }}</small>
					@endforeach
				@endif

				<p class="body" style="color:#33ffff;">{!! nl2br($p->body) !!} 
					<small style="color: grey;">
						<i> {{ $p->created_at->toFormattedDateString() }} </i>
					</small>
					<br>
					<small style="color:yellow;"> {{ ucfirst($p->user->first_name ." ". $p->user->last_name) }} </small>
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
		<button class="btn btn-primary" data-toggle="modal" data-target="#poem_modal">Submit a Poem</button>
	</div>
@else
	<div class="panel">
		<div class="container create">
			<a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">Register</a></li> to publish a Poem.
		</div>
	</div>
@endif


	{{-- Modal --}}
	@include('modals.create_poem')
	

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