<?php
    
    
    $con = mysqli_connect('localhost', 'root', '', 'clubs');
    if (isset($_POST['add_event']))
    {
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
        $StartDate = $_POST['StartDate'];
        $EndDate = $_POST['EndDate'];
        $Cost = $_POST['Cost'];
        $LocationID = $_POST['LocationID'];

    
    $query = "INSERT INTO `events`(`Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `LocationID`) VALUES ('$Title','$Description','$StartDate','$EndDate','$Cost','$LocationID')";
    $run = mysqli_query($con,$query);
    if($run==TRUE)
        echo "Event added!";
    else 
        echo "Error!";
     }
?>

