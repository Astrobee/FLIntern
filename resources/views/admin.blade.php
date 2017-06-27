@extends('layouts.master')

@section('body')
<div class="container">
    <h1 class="text-center">Dashboard!!</h1>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				ADMIN Dashboard
				</div>
				<div class="panel-body">
					@component('components.who')
					@endcomponent
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
