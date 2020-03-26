<?php
   include('adminsession.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <?php  if (isset($_SESSION['adminname'])) : ?>
        <h1>Welcome <strong><?php echo $_SESSION['adminname']; ?></strong></h1>
        <p> <a href="home.php" style="color: black;">Go to Home Page</a> </p>
        <p> <a href="viewclubs.php" style="color: black;">View Clubs</a> </p>
        <p> <a href="viewevents.php" style="color: black;">View Events</a> </p>
        <p> <a href="addclubs.php" style="color: black;">Add Clubs</a> </p>
        <p> <a href="addevents.php" style="color: black;">Add Events </a> </p>
    	<h2> <a href="adminlogout.php" style="color: red;">Logout</a> </h2>
      <?php endif ?>
    
      
   </body>
   
</html>