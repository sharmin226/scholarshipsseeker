<h1>Search by Subjects</h1>

<ul>
	@foreach($mylists as $mytitle)
		<li>
			<a href="show-single-post/{{ $mytitle->slug }}">
				{{ $mytitle->subject }}
			</a>
		</li>	
	@endforeach
</ul>