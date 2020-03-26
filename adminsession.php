<?php
   
   session_start();
   $con = mysqli_connect('localhost', 'root', '', 'clubs');
   
   $user_check = $_SESSION['adminname'];
   
   $ses_sql = mysqli_query($con,"select adminname from admin where adminname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['adminname'];
   
   if(!isset($_SESSION['adminname'])){
      header("location:adminlogin.php");
      die();
   }
?>