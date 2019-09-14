<?php 
session_start();
if($_SESSION['userid']=="")
{
	header("location:login.php");
}

?>
<!--Header Part Starts-->
<?php 
include 'header2.php';
include 'config.php';
?>
<!--Header Part Ends-->
<!-- gallery -->
	<div id="gallery" class="gallery">
		<h3 class="heading">Portals</h3>
			<div class="gallery-info">
				       
				      <div class="col-md-3 gallery-grids">
					  <a href="images/logo1.png" class="gallery-box"  data-title="">
						<img src="images/logo1.png" alt="" class="img-responsive zoom-img"
						style="height:250px;" title="">
					  </a>
				      </div>
				     <div class="col-md-3 gallery-grids">
					  <a href="images/logo5.png" class="gallery-box"  data-title="">
						<img src="images/logo5.png" alt="" class="img-responsive zoom-img"
						style="height:250px;" title="">
					  </a>
				      </div>
				      <div class="col-md-3 gallery-grids">
					  <a href="images/logo3.png" class="gallery-box"  data-title="">
						<img src="images/logo3.png" alt="" class="img-responsive zoom-img"
						style="height:250px;" title="">
					  </a>
				      </div>
				      <div class="col-md-3 gallery-grids">
					  <a href="images/logo4.png" class="gallery-box"  data-title="">
						<img src="images/logo4.png" alt="" class="img-responsive zoom-img"
						style="height:250px;" title="">
					  </a>
				      </div>
				      <div class="col-md-3 gallery-grids">
					  <a href="images/logo2.png" class="gallery-box"  data-title="">
						<img src="images/logo2.png" alt="" class="img-responsive zoom-img"
						style="height: 300px" title="">
					  </a>
				      </div>
				     
				    
			
				<div class="clearfix"> </div>	
			</div>
		<script src="js/lightbox-plus-jquery.min.js"></script>
	</div>
<!-- //gallery -->
<!--Footer Part Starts-->
<?php 
include 'footer.php';
?>

<!--Footer Part Ends-->