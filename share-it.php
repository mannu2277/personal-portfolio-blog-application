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
		<h3 class="heading">Share It</h3>
			<div class="gallery-info">
				       
				      <div class="col-md-2 gallery-grids">
					  <a href="share-pics.php" class="gallery-box"  data-title="">
						<img src="images/shareimages.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Share Photos">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="sharefeelings.php" class="gallery-box"  data-title="">
						<img src="images/sharefeelings.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Share Feelings">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="story1.php" class="gallery-box"  data-title="">
						<img src="images/share3.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Share Achievments">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="sharefeelings.php" class="gallery-box"  data-title="">
						<img src="images/sharefriendship.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Celebrate Friendship">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="story1.php" class="gallery-box"  data-title="">
						<img src="images/shareinfo.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Share Important Information">
					  </a>
				      </div>
				      <div class="col-md-2 gallery-grids">
					  <a href="searchforhelp.php" class="gallery-box"  data-title="">
						<img src="images/shareforhelp.png" alt="" class="img-responsive zoom-img"
						style="height: 200px " title="Searching me for a help ?">
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