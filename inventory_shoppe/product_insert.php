<?php
$user='root';
$pass='';
$db='shopping';
$conn= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$user_check = $_SESSION['admin_email'];
//echo $user_check;
//exit;
   
   $ses_sql = mysqli_query($conn,"select * from admin_master where admin_email = '$user_check' ");
   //echo $ses_sql;
   //exit;
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['admin_name'];
   $log_id=$row['admin_id'];
  // echo $log_id;
   //exit;
   
   if(!isset($_SESSION['admin_email'])){
      header("location:admin_login.php");
      die();
   }

if(isset($_GET['I']))
{
	$I = $_GET['I'];
	
	$esql = "select * from vendor_master where vendor_id='2'";
	$erec = mysqli_query($conn,$esql);
	$eres = mysqli_fetch_assoc($erec);
	$eesql="update vendor_master set is_active='1' where vendor_id='2'";
			//echo $eesql;
			//exit;

		        $eerec = mysqli_query($conn,$eesql);
	
		  echo "<script>
							 alert('REQUEST accepted!!!!');
							 location.replace('vendor_request.php?');
							 </script>";
				
}

if(isset($_GET['D']))
{
	$D = $_GET['D'];
	$dsql = "delete from vendor_master where vendor_id='$D'";
	$drec = mysqli_query($conn,$dsql);
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>::::VENDOR REQUEST::::</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
	<form id="form1" name="form1" method="post" action="">

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin_index.php">ADMIN DASHBOARD</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../../cyber_shoppe/about.php"><i class="fa fa-home fa-fw"></i> CYBER SHOPPE</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>                                    </div>
                                </a>                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>                                    </div>
                                </a>                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>                                    </div>
                                </a>                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>                                    </div>
                                </a>                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>                                    </div>
                                </a>                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>                                </a>                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $login_session; ?><b class="caret"></b>                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>                            </li>
                            <li class="divider"></li>
                            <li><a href="../admin_logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>                                        </button>
                                </span>                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">&nbsp;</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                   
                        <h2 align="center" class="panel-title">::::::::::INSERT PRODUCT:::::::::::</h2>
                      </div>
                      <div class="panel-body">
                        <?php
										
$sou=$_SESSION['vendor_name'];
$nilu=$_SESSION['vendor_id'];
										
				if(isset($_POST['insert']))
				{
					$p_name=$_POST['p_name'];
					$desc=$_POST['desc'];
					$price=$_POST['price'];
					$discount=$_POST['discount'];
					$quantity=$_POST['quantity'];
					$sizes=$_POST['sizes'];
					$category=$_POST['category'];
					$sub_cat=$_POST['sub_cat'];
					 //----------IMAGE------------//
					/* $kal=array('','$nilu','$sub_cat','$category','$p_name','$sou','$price','$desc','$sizes','$discount','$file_name',1);
		
		echo $kal;*/
					
					 if(isset($_FILES['image']))
					 {
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
            
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
		 echo  $errors;
		// echo $nilu;
		$sql= "INSERT INTO product(p_id,vendor_id,sub_cat_id,cat_id,name,brand,quantity,price,description,sizes,discount,url,is_active) values('','$nilu','$sub_cat','$category','$p_name','$sou','$quantity','$price','$desc','$sizes','$discount','$file_name',1);";
		//echo $sql;
		//exit;
		
		$rec= mysqli_query($conn,$sql);
	
		  echo "<script>
							 alert('DATA INSERTED!!!!');
							 location.replace('product_insert.php?');
							 </script>";
						
      }else{
         print_r($errors);
		  echo "<script>
							 alert('DATA INSERTION FAILED!!');
							 location.replace('product_insert.php?');
							 </script>";
		
      }
   }
					
                }
				
				?>
                        <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="PRODUCT NAME" name="p_name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                          <textarea name="desc" class="form-control" id="desc" placeholder="PRODUCT DESCRIPTION"></textarea>
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="PRODUCT PRICE" name="price" type="text" autofocus>
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="PRODUCT DISCOUNT" name="discount" type="text" autofocus>
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="PRODUCT QUANTITY" name="quantity" type="text" autofocus>
                        </div>
                        <div class="form-group">
                          <label> SIZES   ::&nbsp&nbsp&nbsp&nbsp
                            <input name="sizes" type="radio" value="S">
                          </label>
                          S  &nbsp&nbsp&nbsp&nbsp
                          <input name="sizes" type="radio" value="M">
                          M &nbsp&nbsp&nbsp&nbsp
                          <input name="sizes" type="radio" value="L">
                          L</div>
                        <div class="form-group">
                          <label> CATEGORY  :: &nbsp&nbsp
                            <input name="category" type="radio" value="1">
                          </label>
                          MEN   &nbsp&nbsp
                          <input name="category" type="radio" value="2">
                          WOMEN </div>
                        <div class="form-group">
                          <label> SUB CATEGORY  ::
                            <select name="sub_cat">
                            <option>---SELECT---</option>
                            <option value="1">MEN's CLOTHING</option>
                            <option value="2">MEN's FOOTWEAR</option>
                            <option value="3">MEN's WATCHES</option>
                            <option value="4">WOMEN's CLOTHING</option>
                            <option value="5">WOMEN's FOOTWEAR</option>
                            <option value="6">WOMEN's WATCHES</option>
                            <option value="7">MEN's BAG</option>
                            <option value="8">WOMEN's BAG</option>
                          </select>
                          </label>
                        </div>
                        <div class="form-group"> IMAGE  ::
                          <input type="file" name="image" />
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <p align="center">
                          <input type="submit" name="insert" value="INSERT PRODUCT" class="btn btn-outline btn-primary btn-lg">
                        </p>
                        </fieldset>
                      </div>
                    </div>
                    <!-- /.row -->
<div class="row">
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                  </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <!-- /.panel -->
</div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
		</form>

    </body>
</html>
