<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="POST" action="">
  <table width="775" height="241" border="0" bordercolor="#333333">
    <tr bgcolor="#E9E8F9">
    <td width="100%" align="center" valign="middle"><h2><u>WISH LIST</u>:</h2></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor=""><table width="724" border="0" align="center">
        <tr bgcolor="#E9E8F9">
		  
          <td align="center"><b>Product Name</b></td>
          <td align="center"><b>Quantity</b></td>
          <td align="center"><b>Price</b></td>
          <td align="center"><b>Discount</b></td>
          <td align="center"><b>Value</b></td>
          <td align="center"><b>Action</b></td>
        </tr>
		<tr bgcolor="#F5F4F4">
          <td><?php echo $row4['name']; ?></td>
          <td><?php echo $row1['quantity']; ?></td>
          <td><?php echo $row4['price']; ?></td>
          <td><?php echo $row4['discount']; ?></td>
          <td><?php echo $row1['value']; ?></td>
          <td align="center"><input type="submit" name="Submit" value="Cancel" /></td>
        </tr>
      </table>
	  <hr />
	  <table width="728" align="center">
	  	<tr bgcolor="#E9E8F9">
          <td width="192" align="center"><strong>TOTAL :</strong></td>
          <td width="120">&nbsp;</td>
          <td width="73">&nbsp;</td>
          <td width="119">&nbsp;</td>
          <td width="83">&nbsp;</td>
          <td width="113">&nbsp;</td>
        </tr>
		<tr>
          <td width="192">&nbsp;</td>
          <td width="120">&nbsp;</td>
          <td width="73">&nbsp;</td>
          <td width="119">&nbsp;</td>
          <td width="83">&nbsp;</td>
          <td width="113">&nbsp;</td>
        </tr>
	  </table>
        <table width="176" border="0" align="center">
          <tr>
            <td width="76" align="center"><input type="submit" name="Submit" value="Buy" /></td>
            <td width="90" align="center"><input type="submit" name="Submit2" value="Cancel" /></td>
          </tr>
        </table>        <p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
