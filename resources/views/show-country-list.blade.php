<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
	<h1>
		
		{{ $post->title }}
	</h1>
	
	<p>
		<b>Slug:</b>
		{{ str_slug($post->title, "-") }}
	</p>

	<p>
		<b>Deadline: </b>
		{{ $post->deadline }}
	</p>

	<p>
		<b>Country: </b>
		{{ $post->country }}
	</p>
	<p>
		<b>Course Level: </b>
		{{ $post->course }}
	</p>
	<p>
		<b>Subject: </b>
		{{ $post->subject }}
	</p>
	<p>
		<b>Website:</b>
		{{ $post->website }}
	</p>

	<p>
		<b>Nationality:</b>
		{{ $post->nationality }}
	</p>
	<!-- ============================================================ -->
	<p>
	<h3><a href="/">Edit your post</a></h3>
	<!-- <button class="btn btn-primary"><a href="\">Edit your post</a></button> -->
	</p>
	<p><h3><a href="/delete-post/{{$post->id}}">Delete your post</a></h3></p>
	<p>
		
		<a href="/home-page">Go back to home</a>
	</p>
	
	</center>


</body>
</html>