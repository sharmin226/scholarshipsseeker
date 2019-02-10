<h1>Search by Country</h1>

<ul>
	@foreach($mylists as $mytitle)
		<li>
			<a href="show-single-post/{slug}">
				{{ $mytitle->country }}
			</a>
		</li>	
	@endforeach
</ul>