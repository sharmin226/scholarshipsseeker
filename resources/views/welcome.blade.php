<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<center>
	<h1>Welcome to Scholarshipseeker</h1>
	<h2>hello world</h2>

	@if( ! Auth::check())
		<h3><a href="/registration-form">Sign up</a>&nbsp&nbsp|&nbsp&nbsp<a href="/login-form">Login</a></h3>
	@else 
		<a href="/show-my-post">Dashboard</a>
	@endif	
	
	<h2><a href="/show-post-list">Free scholarship for students</a></h2>
	<!-- <img src="c:ss.jpeg"> -->
	<hr>

<h3>Search scholarship by Category</h3>
<h4>
	<a href="/search-by-country">Scholarship by Country</a>
	
	<br>
	<a href="/search-by-subject">Scholarship by Subject</a>
	
	<br>
	<a href="/search-by-course">Scholarship by Course Level</a>
	
	<br>
</h4>
</center>
</body>
</html>