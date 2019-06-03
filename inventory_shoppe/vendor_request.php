<?php
$user='root';
$pass='';
$db='shopping';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();

if(isset($_GET['I']))
{
	$I = $_GET['I'];
	
	$esql = "select * from vendor_master where vendor_id='$I'";
	$erec = mysqli_query($db,$esql);
	$eres = mysqli_fetch_assoc($erec);
	$eesql="update vendor_master set is_active='1' where vendor_id='$I'";
			//echo $eesql;
			//exit;

		        $eerec = mysqli_query($db,$eesql);
	
		  echo "<script>
							 alert('REQUEST accepted!!!!');
							 location.replace('vendor_request.php?');
							 </script>";
				
}

if(isset($_GET['D']))
{
	$D = $_GET['D'];
	$dsql = "delete from vendor_master where vendor_id='$D'";
	$drec = mysqli_query($db,$dsql);
	/*echo $drec;
	echo exit;*/
	if($drec)
	{
		echo "<script>
					alert('REQUEST Deleted');
					location.replace('vendor_request.php?')
					</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<?php
				$fsql = "select * from vendor_master where is_active='2'";
				$frec = mysqli_query($db,$fsql);
				$fnum = mysqli_num_rows($frec);
				if($fnum > 0)
				{
				?>
  <table class="table table-bordered table-striped" width="883" height="89" border="1">
    <tr class="panel-heading">
      <td width="65">Sl.No</td>
      <td width="95">Vendor Name</td>
      <td width="153">Vendor E-mail</td>
	  <td width="153">Phone Nummber</td>
      <td width="196">Request</td>
    </tr>
					  <?php
				  $i = 1;
				  while($fres = mysqli_fetch_array($frec))
				  {
				  ?>

    <tr class="panel-body">
      <td><?php echo $i;?></td>
	  <td><?php echo $fres['vendor_name'];?></td>
	  <td><?php echo $fres['vendor_email'];?></td>
      <td><?php echo $fres['phone'];?></td>

      <td><button type="button" class="btn btn-outline btn-success"><a href="vendor_request.php?I=<?php  echo $fres['vendor_id']; ?>">Pending</a></button> | <button type="button" class="btn btn-outline btn-success"><a href="vendor_request.php?D=<?php  echo $fres['vendor_id']; ?>">Delete</a></button> </td>
    </tr>
	<?php
				  $i++;
				  }
				  ?>

  </table>
  <?php
				  }
				?>

  
</form>

</body>
</html>
