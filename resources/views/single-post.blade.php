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
		Slug:
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

	<p>
		Posted by 
		<strong>{{ $post->user->username }} </strong>
	</p>

	
	@if( Auth::check() AND Auth::id() == $post->user_id )
		<a href="/show-edit-form/{{$post->id}}">Edit </a>
		<br>

		<a href="/delete-post/{{$post->id}}">Delete </a>
	@endif



	<p>
		<h2><a href="/post-scholarship">Add more post</a></h2>
		<br>
		<a href="/home-page">Go back to home</a>
	</p>
	
	</center>


</body>
</html>