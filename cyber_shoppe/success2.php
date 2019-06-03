

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="get" action="">
<?php
   
 
$user='root';
$pass='';
$db='shopping';
$conn= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$enc_quants=$_POST["quants"];
	  $amount_val=$_POST["amount"];
	  $dis=$_POST["discount_amount"];
	  $net_amount=$amount_val-$dis;
	  $net_total=$net_amount*$enc_quants;
						$bil="insert into billing(billing_id,user_id,p_id,qty,value)values('','1','$pro_id','$enc_quants','$net_total')";
						$rec_bil=mysqli_query($conn,$bil);
						
				
				
	  
	  ?>
</form>
SUCCESS!!!!!!
</body>
</html>
