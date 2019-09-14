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
		<h3 class="heading">Literature 
		section</h3>
			<div class="gallery-info">
				       
				      <div class="col-md-2 gallery-grids">
					  <a href="stories.php" class="gallery-box"  data-title="">
						<img src="images/gallery10.jpg" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="Stories">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="#" class="gallery-box"  data-title="">
						<img src="images/gallery4.jpg" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="Life Events">
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