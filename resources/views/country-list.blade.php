<h1>List of countries</h1>

<ul>

	@foreach($lists as $mytitle)
		<li>
			<a href="/search-by-country/{{ strtolower(str_slug($mytitle->country, '-')) }}">
				<b>{{ $mytitle->country }} </b>scholarships
			</a>
		</li>	
	@endforeach
	
</ul>