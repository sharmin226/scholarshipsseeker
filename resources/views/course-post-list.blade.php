<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h1>All scholarships list</h1>
	
<ul>
	@foreach($mylists as $mytitle)
		<li>
			<a href="/show-single-post/{{ $mytitle->slug }}">
				{{ $mytitle->title }}
			</a>
		</li>	
	@endforeach
</ul>
	
</body>
</html>