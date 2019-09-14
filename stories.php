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
		<h3 class="heading">Stories</h3>
			<div class="gallery-info">
				       
				      <div class="col-md-3 gallery-grids">
					  <a href="story1.php" class="gallery-box"  data-title="">
						<img src="images/story1.png" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="Me Phir bhi Tumko Cahunga">
					  </a>
				      </div>
				      <div class="col-md-3 gallery-grids">
					  <a href="story2.php" class="gallery-box"  data-title="">
						<img src="images/story2.png" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="Dream of Desire">
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