<?php
$did=$_GET["did"];
if(!(isset($did)))
{
	header("location:index.php");
}

?>
<?php 

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
	

       		$query="UPDATE `$page` SET `id`='".$did."',`main_heading`='".$main_heading."',`sub_heading`='".$sub_heading."',`brief_des`='".$brief_des."',`detail_description`='".$detail_des."' WHERE `id`='".$did."'";
			mysqli_query($dbcon,$query) or die(mysqli_error());
			echo'<script>
       alert("Updated Successfully");
       window.location.href="view-personal-information.php";

      </script>';
			$empty="File Updated Successfully";
    	
	
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
                <h3>Update Personal Information (in Detail) </h3>
              </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Personal Information (in Detail)</h2>
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
                      <?php
                     include 'config.php';
                     $query="SELECT * FROM `$page` WHERE `id`='".$did."'";
                     $data=mysqli_query($dbcon,$query);
                     $result=mysqli_fetch_array($data);


                      ?>
                          
          
            <div class="form-group"  >
               <label for="designation">Edit Main Heading </label> 
               <input type="text" name="main_heading" class="form-control" value="<?php echo $result['main_heading']; ?>"  >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
          <div class="form-group"  >
               <label for="qualification">Edit Sub Heading</label> 
               <input type="text" name="sub_heading" class="form-control" value="<?php echo $result['sub_heading']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
            
            <div class="form-group"  >
               <label for="qualification">Edit Description (brief)</label> 
               <input type="text" name="brief_des" class="form-control" value="<?php echo $result['brief_des']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
            <div class="form-group"  >
               <label for="qualification">Edit Description</label> 
               <input type="text" name="detail_des" class="form-control" value="<?php echo $result['detail_description']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
             
					 
                     
					   
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="banner_update">Update Details</button>
						 
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
