<?php 
session_start();
error_reporting(1);
if($_SESSION['sid']=="")
{	
	header("location:index.php");
}
	include 'config.php';
	$id=$_GET['action'];
	$did=$_GET['did'];
	//$cat=$_GET['cat'];
	$page=$_GET['page'];
	$q="SELECT * FROM `$page` WHERE `id`='".$did."'";
	$d=mysqli_query($dbcon,$q);
	$res=mysqli_fetch_array($d);
##########Update Query################
	extract($_POST);
	if(isset($_POST['banner_update']))
	{
		
       		$query="UPDATE `$page` SET `id`='".$did."' ,`fafaicons`='".$fafaicons."',`title`='".$title."',`company`='".$company."',`year`='".$year."',`description`='".$description."' WHERE `id`='".$did."'";
			mysqli_query($dbcon,$query) or die(mysqli_error());
			$empty="File Updated Successfully";
			echo'<script>
			alert("Updated Successfully");
			window.location.href="add-work-exp.php";
			</script>';
			
			
    }	
	
	else
	{	
		$empty="Please Select Valid File";
	
	}
	
##########Update Query################

	include 'header.php';		
?>
<style>
.file{
	    border: 2px solid #999;
    border-radius: 6px;
    width: 175px;
    box-shadow: 1px 3px 2px 2px #999
}
</style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'slider-bar.php';?>

        <!-- top navigation -->
          <?php include 'nav_bar.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Job Experience</h3>
              </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Job Experience</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                       
						                          <?php
                                    $q3="SELECT * FROM `$page` WHERE `id`='".$did."'";
									                  $d3=mysqli_query($dbcon, $q3);
									
                                    $res3=mysqli_fetch_array($d3);
                                        ?>
						
						 
						<div class="form-group"  >
							 <label for="discription">Change Fa-Fa Icons</label> 
               <select name="fafaicons" class="form-control">
                 <option selected="selected" value="<?php echo $res3['fafaicons'];   ?>"><?php echo $res3['fafaicons'];   ?>
                   
                 </option>
                                    <?php
                                    $q3="SELECT DISTINCT `icon` FROM `fafa_icons` WHERE `icon` != '".$res3['icon']."'";
                                    $d3=mysqli_query($dbcon, $q3);
                  
                                    while($res=mysqli_fetch_array($d3))
                                    {
                                    ?>
                                    <option  value="<?php echo $res['icon'];   ?>">
                                      <?php echo $res['icon'];   ?>
                   
                                    </option>
                                    <?php 

                                  }
                                  ?>

               </select>
							 

            </div>
						<div class="form-group"  >
							 <label for="discription">Edit Job Title</label> 
							 <input type="text" name="title" class="form-control" value="<?php echo $res3['title'];?>">
							  
						</div>
            <div class="form-group"  >
               <label for="discription">Edit Company Name</label> 
               <input type="text" name="company" class="form-control" value="<?php echo $res3['company'];?>">
                
            </div>
            <div class="form-group"  >
               <label for="discription">Edit Time Period (In Years)</label> 
               <input type="text" name="year" class="form-control" value="<?php echo $res3['year'];?>">
                
            </div>
           
					<div class="form-group"  >
							 <label for="discription">Edit Description</label> 
							 <input type="text" name="description" class="form-control" value="<?php echo $res3['description'];?>">
							  
					</div>
									
                      </div>			   
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="banner_update">Update </button>
						 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php';?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
