@extends('layouts.master')


@section('body')

<div class="container">
	<div class="row lessons">

	{{-- IMAGES SECTION --}}
		<div class="col-md-4">
			<div class="">
				<img src="/img/lessons/laravel.png" alt="Laravel">
			</div>
		</div>

		<div class="col-md-4">
			<div class="">
				<img src="/img/lessons/bootstrap.png" alt="Bootstrap">
			</div>
		</div>

		<div class="col-md-4">
			<div class="">
				<img src="/img/lessons/javascript.png" alt="JavaScript">
			</div>
		</div>
	</div>

		{{-- GENERAL INFORMATION SECTION --}}
	<div class="row about">
					<h1 >About</h1>
		<div class="col-md-4">
				<p>
					Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the Model–View–Controller (MVC) architectural pattern. This Framework is built with PHP programming language as its backbone.
				</p>
		</div>

		<div class="col-md-4">
				<p>
					Bootstrap is a free and open-source front-end web framework for designing websites and web applications. It contains HTML- and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions.
				</p>
		</div>

		<div class="col-md-4">
				<p>
					It is a prototype-based, multi-paradigm scripting language that is dynamic, and supports object-oriented, imperative, and functional programming styles. JavaScript runs on the client side of the web, which can be used to design / program how the web pages behave on the occurrence of an event.
				</p>
		</div>
	</div>


<hr class="dhr">
				@include('weeks.first')
				<hr class="lhr">
				@include('weeks.second')
				<hr class="lhr">
				@include('weeks.third')
				<h1 style="text-align: center; color: white; font-family: 'algerian';">WEEK <img src="/img/lessons/4.png"> COMING SOON</h1>
				{{-- @include('weeks.third')
				<hr class="lhr">
				@include('weeks.fourth') --}}
	</div>
</div>

@endsection