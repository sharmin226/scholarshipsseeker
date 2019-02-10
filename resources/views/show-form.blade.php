<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

	<br>
	<br>
<center>
	<h1>Post a scholarship</h1>
  
<form method="POST" action="store-post-into-db"> 
  {{ csrf_field() }}

 	<div class="col-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Scholarship Title: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter scholarship title" name="title">
    
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Deadline: </label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="deadline">
  </div>
<br>
  
<div class="form-group">
    <label for="exampleFormControlSelect1">Country:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="USA">USA</option>
    </select>
  </div>
<br>
  
<div class="form-group">
    <label for="exampleFormControlSelect1">Course Level:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="course">
        <option value="Foundation">Foundation</option>
        <option value="Diploma">Diploma</option>
        <option value="Undergraduate">Undergraduate</option>
        <option value="Masters">Masters</option>
        <option value="Postgraduate">Postgraduate</option>
        <option value="PhD">PhD</option>
        <option value="Postdoc">Postdoc</option>
    </select>
  </div>

<br>
  <div class="form-group">
    <label for="exampleInputEmail1">Subject: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter subject" name="subject">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Website: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter website" name="website">
  </div>
  <br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Nationality:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="nationality">
        <option value="All nationalities">All nationalities</option>
        <option value="Asian students">Asian students</option>
        <option value="African students">African students</option>
    </select>
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>