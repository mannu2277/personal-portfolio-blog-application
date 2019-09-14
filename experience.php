<?php 
include 'header.php';
include 'config.php';
?>



<!-- Work experience -->
<div class="experience" id="experience">
	<div class="container">
			<h3 class="heading">Experience</h3>
                       <?php 
                       include 'config.php';
                       $query1="SELECT * FROM `experience`";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res=mysqli_fetch_array($d2))
                       {
					   ?>
		<div class="col-md-6">
			<div class="grid1">
				<h3><i class="<?php echo $res['fafaicons']?>" aria-hidden="true"></i> <?php echo $res['title'];?></h3>
				<h4><?php echo $res['company']?></h4>
				<p><?php echo $res['description']?></p>
				<h4><b>Year</b> : <?php echo $res['year']?></h4>
			</div>
		</div>

		<?php 
	}
	?>
		
		<div class='clearfix'></div>
		
	</div>
</div>
<!-- //Work experience -->

<!-- Technical Stats -->
<div class="count-agileits" id="stats">
	<div class="container">
		<h3 class="heading">Technical Statistics</h3>
					<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						 <?php 
                       include 'config.php';
                       $query1="SELECT * FROM `statistics`";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res3=mysqli_fetch_array($d2))
                       {
					   ?>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $res3['number'];?>' data-delay='1' data-increment="1"><?php echo $res3['number'];?></div>
									<span></span>
									<h5><?php echo $res3['name'];?></h5>
							</div>
						</div>
						<?php 
					}
					?>

						<div class="clearfix"></div>
						</div>
					</div>
	</div>
</div>

<!-- Technical stats -->

<?php

include 'footer.php';
?>