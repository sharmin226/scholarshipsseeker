<h1>List of courses</h1>

<ul>

	@foreach($lists as $mytitle)
		<li>
			<a href="/search-by-course/{{ strtolower(str_slug($mytitle->course, '-')) }}">
				<b>{{ $mytitle->course }} </b>scholarships
			</a>
		</li>	
	@endforeach
	
</ul>