<?php

session_start();
if($_SESSION['userid']=="")
{   
    header("location:login.php");
}


?>

<?php 
include 'header.php';
include 'config.php';
?>
<!-- Education -->
<div class="education" id="education">
	<div class="container">
			<h3 class="heading">Education</h3>
			           <?php 
                       include 'config.php';
                       $query1="SELECT * FROM `education`";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res=mysqli_fetch_array($d2))
                       {
					   ?>
		<div class="col-md-12">
			<div class="grid1">
				<center><h3><?php echo $res['category'];  ?></h3></center>
				<h3><?php echo $res['title'];  ?></h3>
				<h3><?php echo $res['title2'];  ?></h3>
				<h4><b>Year</b> : <?php echo $res['year'];  ?>
				<h4><b>Aggregate (%)</b> : <?php echo $res['grade'];  ?></h4>
				<br>
				<h3><?php echo $res['college'];  ?></h3>
				<h3><?php echo $res['university'];  ?></h3>
				<p><?php echo $res['description'];  ?></p>
				
			</div>
		</div>
		<div class='clearfix'></div>
		<br>
		<br>
		<?php 

	}
	?>
		
		
		
	</div>
</div>
<!-- //Education -->

<?php

include 'footer.php';
?>