<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<h1>My post list</h1>

<ul>
	@foreach ($mylists as $mytitle) 
		<li>
		<a href="show-single-post/{{ $mytitle->slug }}">
			{{ $mytitle->title }}
			</a>
		</li>	
	@endforeach
</ul>

<a href="\logout">Logout</a>
<br>
<br>
<a href="\home-page">Go back home</a>
	
</body>
</html>