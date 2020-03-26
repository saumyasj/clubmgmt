
<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login Page </title>
  <link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login </h2>
  </div>
	
  <form method="post" action="adminserver.php">
  	
  	<div class="input-group">
  	  <label>Admin name</label>
  	  <input type="text" name="adminname">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="adminpwd">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="admin_login">LOGIN</button>
  	</div>
  </form>
</body>
</html>
