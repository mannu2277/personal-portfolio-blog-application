<?php 
include 'header.php';
include 'config.php';
?>



<!-- gallery -->
	<div id="gallery" class="gallery">
		<h3 class="heading">Happy Clients</h3>
			<div class="gallery-info">
				       <?php 
                       include 'config.php';
                       $query1="SELECT * FROM `gallary`";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res=mysqli_fetch_array($d2))
                       {
					   ?>
				      <div class="col-md-3 gallery-grids">
					  <a href="admin/<?php echo $res['image'];?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="admin/<?php echo $res['image'];?>" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px ">
					  </a>
				      </div>
				     <?php 
			         }
			         ?>
			
				<div class="clearfix"> </div>	
			</div>
		<script src="js/lightbox-plus-jquery.min.js"></script>
	</div>
<!-- //gallery -->



<?php

include 'footer.php';
?>