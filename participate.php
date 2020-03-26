<?php include('enrollserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Club Enrollment Form </title>
  <link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
  <div class="header">
  	<h2>Enroll in Club</h2>
  </div>
	
  <form method="post" action="enrollserver.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Club Name</label>
  	  <input type="text" name="clubname">
  	  <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Genres
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="thriller.html" target="_blank">Thriller</a>
			          <a class="dropdown-item" href="knowledge.html" target="_blank">Knowledge</a>
			          <a class="dropdown-item" href="Mystery.html" target="_blank">Mystery</a>
			          <a class="dropdown-item" href="teens.html" target="_blank">Teens</a>
			        </div>
			      </li>

  	</div>
  	<div class="input-group">
  	  <label>Roll Number</label>
  	  <input type="text" name="rollno">
  	</div>
  	<div class="input-group">
  	  <label>Year</label>
  	  <input type="text" name="year">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="enroll_user">Enroll</button>
  	</div>
  	
  </form>
</body>
</html>
