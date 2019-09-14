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
		$path = "profile_photo/" . $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'], $path);
	if ($_FILES['image']['tmp_name'] != '' ) {
       		$query="UPDATE `$page` SET `id`='".$did."', `image`='".$path."',`dob`='".$dob."',`phone`='".$phone."',`experience`='".$experience."',`address`='".$address."',`email`='".$email."',`website`='".$website."' WHERE `id`='".$did."'";
			mysqli_query($dbcon,$query) or die(mysqli_error());
			echo'<script>
       alert("Updated Successfully");
       window.location.href="view-personal-information.php";
      </script>';
			$empty="File Updated Successfully";
    }	
	if ($_FILES['image']['tmp_name'] == '' ) {
       		$query="UPDATE `$page` SET `id`='".$did."',`dob`='".$dob."',`phone`='".$phone."',`experience`='".$experience."',`address`='".$address."',`email`='".$email."',`website`='".$website."' WHERE `id`='".$did."'";
			mysqli_query($dbcon,$query) or die(mysqli_error());
			echo'<script>
       alert("Updated Successfully");
       window.location.href="view-personal-information.php";
      </script>';
    }	
	else
	{	
		$empty="Please Select Valid File";
	
	}
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
                <h3>Update Products </h3>
              </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Team Member</h2>
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
                          <div class="row">
          <div class="col-md-6">
          <div class="form-group"> <label for="exampleInputFile">File input</label> 
        <input type="file" name="image" id="exampleInputFile">
         <p class="help-block">

        </p>
         </div> 


          </div>
         <div class="col-sm-6">
         <img src="<?php echo $result['image'] ?>" class="img-responsive  file" style="height: 250px" >




          </div>

            </div>
            <div class="row">
             <div class="col-sm-4">
               <div class="form-group"  >
               <label for="name">Edit Date of Birth</label> 
               <input type="date" name="dob" class="form-control" value="<?php echo $result['dob']; ?>"  >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>

             </div>
             <div class="col-sm-4">
              Date of Birth
              <br>
              <strong>
                <?php echo $result['dob']; ?>
              </strong>
            </div>
          </div>
            <div class="form-group"  >
               <label for="designation">Edit Contact Number </label> 
               <input type="text" name="phone" class="form-control" value="<?php echo $result['phone']; ?>"  >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
          <div class="form-group"  >
               <label for="qualification">Edit Experience</label> 
               <input type="number" name="experience" class="form-control" value="<?php echo $result['experience']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
            
            <div class="form-group"  >
               <label for="qualification">Edit Address</label> 
               <input type="text" name="address" class="form-control" value="<?php echo $result['address']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
            <div class="form-group"  >
               <label for="qualification">Edit Email id</label> 
               <input type="text" name="email" class="form-control" value="<?php echo $result['email']; ?>" >
                <p class="help-block"><?php echo @$empty;?></p>
            </div>
            <div class="form-group"  >
               <label for="qualification">Edit Website Url</label> 
               <input type="text" name="website" class="form-control" value="<?php echo $result['website']; ?>" >
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
