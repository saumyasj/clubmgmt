<?php include('addclubserver.php') 
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Add Club</title>
  <link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
  <div class="header">
    <h2>Club Details</h2>
  </div>
    
  <form method="post" action="addclubserver.php">
    
    <div class="input-group">
      <label>Club name</label>
      <input type="text" name="clubname">
    </div>
    <div class="input-group">
      <label>Club Type</label>
      <input type="text" name="clubtype">
    </div>
    
    <div class="input-group">
      <button type="submit" class="btn" name="club_add">Add Now</button>
    </div>
    
  </form>
</body>
</html>
