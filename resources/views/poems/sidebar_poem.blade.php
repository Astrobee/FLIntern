	<a href="{{ route('poems') }}">All Poems</a>
	@foreach($tag as $t)
		<hr>
			<a href="/poems/tags/{{ $t }}">{{ $t}}</a>
	@endforeach
