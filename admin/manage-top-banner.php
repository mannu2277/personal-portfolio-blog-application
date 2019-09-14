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
       	$query="INSERT INTO `top_banner` (`id`,`image`,`name`,`primary_desig`,`sec_desig_1`,`sec_desig_2`,`sec_desig_3`,`sec_desig_4`,`sec_desig_5`,`sec_desig_6`,`fb`,`twitter`,`insta`,`linkedin`) VALUES ('','".$path."','".$name."','".$primary_desig."','".$sec_desig_1."','".$sec_desig_2."','".$sec_desig_3."','".$sec_desig_4."','".$sec_desig_5."','".$sec_desig_6."','".$fb."','".$twitter."','".$insta."','".$linkedin."')";
      mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
			$empty="File Uploaded Successfully";
    }	
	else
	{	
		$empty="Please Select Valid File";
	
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
</style>
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
                <div class="x_panel">
                  <div class="x_title">
                    <h3><b>Manage Banner Details</b></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                       <div class="form-group"> <label for="exampleInputFile">File input</label> 
        <input type="file" name="image" id="exampleInputFile">
         <p class="help-block">

        </p>
         </div> 

    <div class="form-group">
     <label for="exampleInputEmail1">Enter Name</label> 
     <input type="text" class="form-control" name="name" id="exampleInputEmail1">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Primary Designation</label> 
     <input type="text" class="form-control" id="exampleInputEmail1" name="primary_desig">
      </div>

       <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 1</label> 
     <input type="text" class="form-control" name="sec_desig_1" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 2</label> 
     <input type="text" class="form-control" name="sec_desig_2" id="exampleInputEmail1">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 3</label> 
     <input type="text" class="form-control" name="sec_desig_3" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 4</label> 
     <input type="text" class="form-control" name="sec_desig_4" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 5</label> 
     <input type="text" class="form-control" name="sec_desig_5" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Secondary Dseignation 6</label> 
     <input type="text" class="form-control" name="sec_desig_6" id="exampleInputEmail1">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Facebook Link</label> 
     <input type="text" class="form-control" name="fb" id="exampleInputEmail1">
      </div>

      <div class="form-group">
     <label for="exampleInputEmail1">Enter Twitter Link</label> 
     <input type="text" class="form-control" name="twitter" id="exampleInputEmail1">
      </div>
      <div class="form-group">
     <label for="exampleInputEmail1">Enter Instagram Link</label> 
     <input type="text" class="form-control" name="insta" id="exampleInputEmail1">
      </div>

       <div class="form-group">
     <label for="exampleInputEmail1">Enter LinkedIn Link</label> 
     <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1">
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
                </div>
              </div>
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Banners</h2>
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
                   <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">SR. No.</th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Profile Photo</th>
                            <th class="column-title">Primary Designation</th>
							              <th class="column-title">Secoundry Designation 1</th>
                             <th class="column-title">Secoundry Designation 2</th>
                              <th class="column-title">Secoundry Designation 3</th>
                               <th class="column-title">Secoundry Designation 4</th>
                                <th class="column-title">Secoundry Designation 5</th>
                                 <th class="column-title">Secoundry Designation 6</th>
                                 <th class="column-title">Facebook Link</th>
                                 <th class="column-title">Twitter Link</th>
                                 <th class="column-title">Instagram Link</th>
                                 <th class="column-title">LinkedIn Id</th>


                            <th class="column-title">Edit</th>
                             <th class="column-title">Delete</th>
                          </th>
                           </tr>
                        </thead>

                        <tbody>
						 <?php
                                    $q1="SELECT * FROM `top_banner`";
									$d1=mysqli_query($dbcon, $q1);
									$counter=0;
                                    while ($res3=mysqli_fetch_array($d1)) {
                                        ?>
                            <tr class="even pointer">
								<td><input type="checkbox" id="check-all" class="flat"></td>
								<td class=" "><?php echo ++$counter;?></td>
								<td class=" "><?php echo $res3['id'];?></td>
								<td class=" "><?php echo $res3['name'];?></td>
								<td class=" "><img src="<?php echo $res3['image'];?>" width="140px" height="150px"></td>
                <td class=" "><?php echo $res3['primary_desig'];?></td>
							  <td class=" "><?php echo $res3['sec_desig_1'];?></td>
                <td class=" "><?php echo $res3['sec_desig_2'];?></td>
                <td class=" "><?php echo $res3['sec_desig_3'];?></td>
                <td class=" "><?php echo $res3['sec_desig_4'];?></td>
                <td class=" "><?php echo $res3['sec_desig_5'];?></td>
                 <td class=" "><?php echo $res3['sec_desig_6'];?></td>
                 <td class=" "><?php echo $res3['fb'];?></td>
                 <td class=" "><?php echo $res3['twitter'];?></td>
                 <td class=" "><?php echo $res3['insta'];?></td>
                 <td class=" "><?php echo $res3['linkedin'];?></td>

								
								<td class=" "><a class="btn btn-primary" href="edit-top-banner.php?did= <?php echo $res3['id'];?>&action=edit&page=top_banner"><i class="fa fa-edit"></i>Edit</a></td>
								<td class=" "><a onclick="return confirm('Are you sure?')" class="btn btn-round btn-danger" style="color:#fff;" href="?did=<?php echo $res3['id'];?>&action=delete&page=top_banner">Delete</td>
						    </tr>
						         <?php
									}
									?>
                         </tbody>
                      </table>
                    </div>
				 </div>
                </div>
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
