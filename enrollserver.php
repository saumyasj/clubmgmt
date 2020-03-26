<?php
    
    $con = mysqli_connect('localhost', 'root', '', 'clubs');
    if (isset($_POST['enroll_user']))
    {
       
    $username = $_POST['username'];
    $clubname= $_POST['clubname'];
    $rollno = $_POST['rollno'];
    $year = $_POST['year'];
     
    $query = "INSERT INTO `register`(`username`, `rollno`, `clubname`, `year`) VALUES ('$username','$rollno','$clubname','$year')";
    $run = mysqli_query($con,$query);
    if($run==TRUE)
        echo "You are enrolled!";
    else 
        echo "Error!";
     }
?>

