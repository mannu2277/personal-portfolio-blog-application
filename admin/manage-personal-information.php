<?php

session_start();
if($_SESSION['sid']=="")
{	
	header("location:index.php");
}


?>

<?php include 'header.php';?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
    <?php include 'slider-bar.php';?>
        <!-- top navigation -->
       <?php include 'nav_bar.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
		 
		 <?php 
		 //session_start();
/*if($_SESSION['sid']=="")
{	
	header("location:index.php");
}*/
	include 'config.php';
	####Add Top Banner Image Insert Query###
	extract($_POST);
	if(isset($_POST['add_team']))
	{
		$path = "profile_photo/" . $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'], $path);
	if ($_FILES['image']['tmp_name'] != '' ) {
       	$query="INSERT INTO `personal_info` (`id`,`image`,`dob`,`phone`,`experience`,`address`,`email`,`website`) VALUES ('','".$path."','".$dob."','".$phone."','".$experience."','".$address."','".$email."','".$website."')";
      mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
			$empty="File Uploaded Successfully";
      if(mysqli_affected_rows($dbcon)>0)
    {
      echo'<script>
          alert("added Successfully");

      </script>';
    }
    }	
	else
	{	
		$empty="Please Select Valid File";
	
	}
	}
  if(isset($_POST['add_personal_info_2']))
  {
    

        $query="INSERT INTO `personal_info_2` (`id`,`main_heading`,`sub_heading`,`brief_des`,`detail_description`) VALUES ('','".$main_heading."','".$sub_heading."','".$brief_des."','".$detail_des."')";
         mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
        $empty="File Uploaded Successfully";
    if(mysqli_affected_rows($dbcon)>0)
    {
      echo'<script>
          alert("added Successfully");
      </script>';
    }
 
  }

##########Add banner bottom-section Image Insert Query end################
##########Delete Query################
	@$action=$_GET['action'];
	@$page=$_GET['page'];
	if($action=='delete')
	{
		$did=$_GET['did'];
		$query="DELETE FROM `$page` WHERE `id`='".$did."'";
		mysqli_query($dbcon,$query);
		//header("location:add-banner.php");
	}
##########Delete Query################
?>
<style>
.file{
	    border: 2px solid #999;
    border-radius: 6px;
    width: 175px;
    box-shadow: 1px 3px 2px 2px #999
}
#about_1
{
  display: none;

}
#about_2
{
  display:none;
  
}
</style>
<script >
  function fun_about()
  {
    
    var e=document.getElementById("s1");
    var eno=e.options[e.selectedIndex].value;
    if(eno=="null")
    {
      alert("please Select a Valid option");
       document.getElementById("about_1").style.display="none";
        document.getElementById("about_2").style.display="none";
        document.getElementById("title").innerHTML="Select Options to manage the About Section Content";
        
     
    }
    if(eno=="p1")
    {
      document.getElementById("about_1").style.display="block";
        document.getElementById("about_2").style.display="none";
       document.getElementById("title").innerHTML="Manage Personal Information in Brief";
    }
    else if(eno=="p2")
    {
      document.getElementById("about_2").style.display="block";
      document.getElementById("about_1").style.display="none";
       document.getElementById("title").innerHTML="Manage Personal Information in Detail";
    }
  }
 
</script>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
   
        <!-- /top navigation -->

        <!-- page content -->
        <div  role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
     
              </div>
            </div>
            <div class="clearfix"></div>
			<!--------------------menu--------------->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h3 ><b id="title">Manage About Section</b></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <div class="x_content" id="">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                     

    <div class="form-group">
     <label for="exampleInputEmail1">Select Option</label> 
     <select class="form-control" id="s1" onchange="return fun_about()">
       <option  value="null">
         -Select- 
       </option>
       <option value="p1">
         Manage Basic Personal Info 
       </option>
       <option value="p2">
         Manage Detailed Personal Info 
       </option>
     </select>
      </div>

      
      
           <div class="ln_solid"></div>
                      <!--<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" onclick="return fun_submit()" >Proceed</button>
              <button class="btn btn-danger" type="button">Cancel</button>
                        </div>
                      </div>-->
                    </form>
                  </div>
                  <div class="x_content" id="about_1">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                       <div class="form-group"> <label for="exampleInputFile">File input</label> 
        <input type="file" name="image" class="file" id="exampleInputFile">
         <p class="help-block">

        </p>
         </div> 

    <div class="form-group">
     <label for="exampleInputEmail1">Enter Date of Birth</label> 
     <input type="date"  name="dob" id="exampleInputEmail1" class="file">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Contact Number</label> 
     <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
      </div>

       <div class="form-group">
     <label for="exampleInputEmail1">Enter Experience (in Years)</label> 
     <input type="number" class="form-control" name="experience" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Address</label> 
     <input type="text" class="form-control" name="address" id="exampleInputEmail1">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Email id</label> 
     <input type="text" class="form-control" name="email" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Website URL</label> 
     <input type="text" class="form-control" name="website" id="exampleInputEmail1">
      </div>
      
      
					 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="add_team">Add</button>
						  <button class="btn btn-primary" type="button">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="x_content" id="about_2">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <!-- <div class="form-group"> <label for="exampleInputFile">File input</label> 
        <input type="file" name="image" class="file" id="exampleInputFile">
         <p class="help-block">

        </p>
         </div> -->

    <div class="form-group">
     <label for="exampleInputEmail1">Enter Main Heading</label> 
     <input type="text"  name="main_heading" id="exampleInputEmail1" class="form-control">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Sub Heading</label> 
     <input type="text" class="form-control" id="exampleInputEmail1" name="sub_heading">
      </div>

       <div class="form-group">
     <label for="exampleInputEmail1">Enter Description (in Brief)</label> 
     <textarea class="form-control" name="brief_des" rows="8" id="exampleInputEmail1"></textarea>
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Description (in Detail)</label> 
     <textarea class="form-control " name="detail_des" rows="8" id="exampleInputEmail1"></textarea>
      </div>
      
      
           <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="add_personal_info_2">Add</button>
              <button class="btn btn-primary" type="button">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                
                </div>
              </div>
            </div>
             <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Space for Deleted Content Saved on deleted-content-manage-per-info.php -->
              </div>
			</div>
			
			
          </div>
        </div>
        <!-- /page content -->

	   </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php include'footer.php';?>
        <!-- /footer content -->
      <!--</div>
    </div>-->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
