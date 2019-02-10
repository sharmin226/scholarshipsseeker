<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>
</head>
<body>

	<center>
		<h1>
			Hello 

			{{ Auth::user()->email }}
		</h1>
	</center>

	<h3>My Posts</h3>
	<hr>
	<ul>
		@foreach($allposts as $post)
			<li>
				<a href="show-single-post/{{ $post->slug }}">{{ $post->title }}</a>
			</li>
		@endforeach		
	</ul>


	
</body>
</html>