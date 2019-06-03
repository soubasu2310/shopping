<?php
$user='root';
$pass='';
$db='shopping';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();

if(isset($_POST["change"]))

	
		{
				 
			 $v_id= $_GET['I'];
			 $email=$_GET['vendor_name'];
			 $name=$_GET['vendor_email'];
			 $status=$_POST['is_active'];
			 
			 	 $eesql="update vendor_master set is_active='$status' where vendor_id='$v_id'";
			//echo $eesql;
			//exit;

		        $eerec = mysqli_query($db,$eesql);
	
		  echo "<script>
							 alert('REQUEST changed!!!!');
							 location.replace('vendor_request.php?');
							 </script>";
						
      }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if(isset($_GET['I']))
{
	$I = $_GET['I'];
	
	$esql = "select * from vendor_master where vendor_id='$I'";
	$erec = mysqli_query($db,$esql);
	$eres = mysqli_fetch_assoc($erec);
}
?>

<form id="form1" name="form1" method="post" action="">
  <table width="296" height="130" border="1">
  <tr>
      <td width="91">Vendor Name </td>
      <td width="8">:</td>
      <td width="175"><?php echo $eres['vendor_name']; ?></td>
    </tr>
    <tr>
      <td width="91">Vendor E-mail </td>
      <td width="8">:</td>
      <td width="175"><?php echo $eres['vendor_email']; ?></td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td><SELECT NAME="is_active" id="is_active" required>
    <OPTION VALUE=""><?php echo $eres['is_active']; ?></OPTION>
    <OPTION VALUE="0">0</OPTION>
	<OPTION VALUE="1">1</OPTION>
	<OPTION VALUE="2">2</OPTION>
    </SELECT></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="change" type="submit" id="change" value="change" /></td>
    </tr>
  </table>
</form>

</body>
</html>
