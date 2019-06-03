<?php
$user='root';
$pass='';
$db='shopping';
$conn= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");


$result9 = mysqli_query($conn, "SELECT quantity from product where p_id=$enc_property_id");
	$row9 =mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$row9 = mysqli_fetch_array($result9, MYSQLI_NUM);
     // printf ("%s \n", $row[0]);
	//echo $enc_property_id;
	//exit;
	// $sach= "SELECT quantity from product where p_id=$enc_property_id";
	//echo $sach;
	//exit;
	//$result11=mysqli_query($conn,$sach);
	//echo $result11;
	//exit;
	//$row_messages = mysqli_query($run_messages,MYSQLI_ASSOC)
	//$row11 = mysqli_fetch_array($result1l,MYSQLI_ASSOC);
	echo $row9;
	exit;
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
