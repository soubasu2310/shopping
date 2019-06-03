<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style18 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
	font-weight: bold;
}
-->
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 80px;
	height: 80px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
	background-image:url(images/stock.png);
}

.back1 {	width: 80px;
	height: 80px;
}
.back1 {	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}
.back1 {	transform: rotateY(180deg);
	background-image:url(images/stock.png);
}
.flip-container1 {	perspective: 1000;
}
.flip-container1 {	width: 80px;
	height: 80px;
}
.flipper1 {	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}
.front1 {	width: 80px;
	height: 80px;
}
.front1 {	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}
.front1 {	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellspacing="0">
  <tr>
    <td width="18%" rowspan="2" align="center" valign="top"><?php include "t.html";?></td>
    <td width="82%" height="118" bgcolor="#0099FF">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0">
     <tr>
    <td width="83%" height="585" align="center" valign="top"><table width="100%" height="30%" cellpadding="4" cellspacing="4">
      <tr>
        <td width="20%" valign="top"><table 
  width="98%" height="131" border="0" align="center" class="box2" id="boxsw">
            <tr>
              <td width="40%" height="96" align="center"><div class="flip-container1" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper1">
                    <div class="front1" style="background-image:url(images/stock.png)";>
                      <!-- front content -->
                    </div>
                    <div class="back1">
                      <!-- back content -->
                    </div>
                  </div>
              </div></td>
              <td width="59%" class="style18"><div align="center">
                  <p>BILLING DETAIL </p>
              </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td width="20%" valign="top"><table 
  width="98%" height="131" border="0" align="center" class="box6" id="boxsw">
            <tr>
              <td width="36%" height="96"><div class="flip-container1" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper1">
                    <div class="front1" style="background-image:url(images/category.png)";>
                      <!-- front content -->
                    </div>
                    <div class="back1" style="background-image:url(images/category.png)";>
                      <!-- back content -->
                    </div>
                  </div>
              </div></td>
              <td width="64%" class="style18"><div align="center"> CATEGORY DETAIL </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td width="20%" valign="top"><table 
  width="98%" height="131" border="0" align="center" class="box3" id="boxsw">
            <tr>
              <td width="36%" height="96"><div class="flip-container1" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper1">
                    <div class="front1" style="background-image:url(images/brand.png)";>
                      <!-- front content -->
                    </div>
                    <div class="back1" style="background-image:url(images/brand.png)";>
                      <!-- back content -->
                    </div>
                  </div>
              </div></td>
              <td width="64%" class="style18"><div align="center">SUB-CATEGORY DETAIL </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td width="20%" valign="top"><table 
  width="98%" height="131" border="0" align="center" class="box4" id="boxsw">
            <tr>
              <td width="36%" height="96"><div class="flip-container1" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper1">
                    <div class="front1" style="background-image:url(images/product_detail.png)";>
                      <!-- front content -->
                    </div>
                    <div class="back1" style="background-image:url(images/product_detail.png)";>
                      <!-- back content -->
                    </div>
                  </div>
              </div></td>
              <td width="64%" class="style18"><div align="center">PRODUCT DETAIL </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td width="20%" valign="top"><table 
  width="98%" height="131" border="0" align="center" class="box5" id="boxsw">
            <tr>
              <td width="36%" height="96" align="right"><div class="flip-container1" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper1">
                    <div class="front1" style="background-image:url(images/user.png)";>
                      <!-- front content -->
                    </div>
                    <div class="back1" style="background-image:url(images/user.png)";>
                      <!-- back content -->
                    </div>
                  </div>
              </div></td>
              <td width="54%" class="style18"><div align="center">USER DETAIL </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
     </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
