<?php
    session_start();
    $adminname = "";
    $adminpwd  = "";
    $errors = array();
    $con = mysqli_connect('localhost', 'root', '', 'clubs');
    if(isset($_POST['admin_login']))
    {
        $adminname=mysqli_real_escape_string($con,$_POST['adminname']);
        $adminpwd=mysqli_real_escape_string($con,$_POST['adminpwd']);
        $sql="select * from admin where adminname='$adminname' and adminpwd='$adminpwd';";
        $query=mysqli_query($con, $sql);
        $row = mysqli_num_rows($query);
        if($row==1)
        {
            
            $_SESSION['adminname']=$adminname;
            header('location:adminpage.php');

        }
        else 
        {
            echo "error!";
        }
        
    }    
?>