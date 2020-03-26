<?php include('addeventserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Event</title>
  <link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
  <div class="header">
   <h2>Event Details</h2>
  </div>
   
  <form method="post" action="addeventserver.php">
   
   <div class="input-group">
     <label>Event name</label>
     <input type="text" name="Title">
   </div>
   <div class="input-group">
     <label>Description</label>
     <input type="text" name="Description">
   </div>
   <div class="input-group">
     <label>Start Date</label>
     <input type="text" name="StartDate">
   </div>
   <div class="input-group">
     <label>End Date</label>
     <input type="text" name="EndDate">
   </div>
   <div class="input-group">
     <label>Cost</label>
     <input type="text" name="Cost">
   </div>
   <div class="input-group">
     <label>Location</label>
     <input type="text" name="LocationID">
   </div>
   <div class="input-group">
     <button type="submit" class="btn" name="add_event">Add Event</button>
   </div>
   
  </form>
</body>
</html>
