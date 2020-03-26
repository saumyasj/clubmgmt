<?php
    
    $clubname="";
    $clubtype="";
    $con = mysqli_connect('localhost', 'root', '', 'clubs');
    if (isset($_POST['club_add']))
    {
        $clubname = $_POST['clubname'];
        $clubtype = $_POST['clubtype'];
    
    $query = "INSERT INTO `club`(`clubname`,`clubtype`) VALUES ('$clubname','$clubtype')";
    $run = mysqli_query($con,$query);
    if($run==TRUE)
        echo "Club added!";
    else 
        echo "Error!";
     }
?>

