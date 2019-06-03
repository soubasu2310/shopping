<?php
$user='root';
$pass='';
$db='shopping';
$conn= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");

   session_start();
   
   $user_check = $_SESSION['vendor_email'];
   
   $ses_sql = mysqli_query($db,"select vendor_name from vendor_master where vendor_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['vendor_name'];
   
   if(!isset($_SESSION['vendor_email'])){
      header("location:login.php");
      die();
   }
?>