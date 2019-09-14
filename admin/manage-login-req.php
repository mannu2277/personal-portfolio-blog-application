<?php 
session_start();
if($_SESSION['sid']=="")
{	
	header("location:index.php");
}
	include 'config.php';
	include 'header.php';

##########Delete Query################
	@$action=$_GET['action'];
  if($action=='accept')
  {
    $did=$_GET['did'];
    $query="SELECT * FROM `temp` WHERE `id` = '".$did."'";
$d1=mysqli_query($dbcon,$query);
$result=mysqli_fetch_array($d1);


$query2="INSERT INTO `login`(`id`,`email`,`phone`,`time`) VALUES('','".$result['email']."','".$result['phone']."','')";


mysqli_query($dbcon,$query2);
if(mysqli_affected_rows($dbcon)>0)
{
  echo'<script>
   alert("Authentication Successfull");
   window.location.href="manage-login-req.php";
  </script>';
}
else

{

  echo'<script>
   alert("Authentication Failed");
  



  </script>';
}

  }
	if($action=='delete')
	{
		$did=$_GET['did'];
		$query="DELETE FROM `temp` WHERE `id`='".$did."'";
		mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));;
	}
	if(isset($_POST['multi_del']))
	{
		extract($_POST);
		//print_r($pro_id);
		foreach($pro_id as $value)
		{
			$query="DELETE FROM `temp` WHERE `id`='".$value."'";
		    mysqli_query($dbcon,$query) or die(mysqli_error());
		
		}
	}
##########Delete Query################

?>
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
                <h3>Manage Login Requests</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Registration Request</small></h2>
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
                   <div class="table-responsive" style="overflow:scroll;" >
				    <form action="" method="post">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                             </th> 
                            <th class="column-title">SR No.</th>
              <th class="column-title">Name</th>             
							<th class="column-title">Email</th>
							<th class="column-title">Mobile Number</th>
							<th class="column-title">Purpose of Access Request </th>
              <th class="column-title">Date </th>
					    <th class="column-title">Time</th>
							<th class="column-title">Allow Access</th>
                            <th class="column-title">Reject</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                         <tbody>
						 <?php
                                    $q1="SELECT * FROM `temp` ORDER BY `id` DESC ";
									$d1=mysqli_query($dbcon, $q1);
									$counter=0;
                                    while ($res3=mysqli_fetch_array($d1)) {
                                        ?>
                           <tr class="even pointer">
						    <td class="a-center "><input type="checkbox" class="flat" name="pro_id[]" value="<?php echo $res3['id'];?>"></td>
                            <td width="20%"><?php echo ++$counter;?></td>
							<td width="20%"><?php echo $res3['name'];?></td>
							<td width="20%"><?php echo $res3['email'];?></td>
							<td width="20%"><?php echo $res3['phone'];?></td>
							<td width="20%"><?php echo $res3['purpose'];?></td>
						 <td width="20%"><?php echo $res3['date'];?></td>
             <td width="20%"><?php echo $res3['time'];?></td>
					    <td width="20%"><a  class="btn  btn-success" href="?did=<?php echo $res3['id'];?>&action=accept">Allow Access</a></td>
                          
							<td width="20%"><a onclick="return confirm('Are you sure?')" class="btn  btn-danger" href="?did=<?php echo $res3['id'];?>&action=delete">Reject</a></td>
                          
						  </tr>
									<?php
									}
									?>
                         </tbody>
                      </table>
					  <p>
              <button type="submit" class="btn btn-danger delete" onclick="return confirm('Are you sure?')" name="multi_del" > Delete Selected</button>
            </p>

                     </form>
					</div>
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
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
