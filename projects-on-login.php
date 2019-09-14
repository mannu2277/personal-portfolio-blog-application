
<?php

session_start();
if($_SESSION['userid']=="")
{   
    header("location:login.php");
}

include 'config.php';
include 'header2.php';
?>

<!-- Projects Section -->
<div class="experience" id="projects">
	<div class="container">
			<h3 class="heading">Projects</h3>
                       <?php 
                       include 'config.php';
                       $query1="SELECT * FROM `projects`";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res3=mysqli_fetch_array($d2))
                       {
					   ?>
		<div class="col-md-6">
			<div class="grid1">
				<h3><i class="<?php echo $res3['fafaicons']?>" aria-hidden="true"></i> <?php echo $res3['name'];?></h3>
				<h4><b>Category</b> : <?php echo $res3['category']?></h4>
				<h4><b>Project Status: </b> : <?php echo $res3['status']?></h4>
				
				<p><?php echo $res3['description']?></p>
				<h4><b>Starting Year</b> : <?php echo $res3['year']?></h4>
				<h4><b>Year of Completion</b> : <?php echo $res3['year2']?></h4>
				<h4><b>Project Link</b> : <a href="<?php echo $res3['link']?>"><?php echo $res3['link']?></a></h4>
				
			</div>
		</div>
	
		
		<?php 
	}
	?>
		
		<div class='clearfix'></div>
		
	</div>
</div>
<!-- //Project Section -->

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