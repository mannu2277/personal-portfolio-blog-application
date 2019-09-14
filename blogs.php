
<?php
session_start(); 
if($_SESSION['userid']=="")
{
	header("location:login.php");
}

?>
<?php 
include 'header2.php';

?>
<!--Blog Section Starts-->
<!-- About -->

<div class="about" id="blogs" >
	<div class="container">
		<h3 class="heading">All Blogs</h3>
		<?php 
include 'config.php';
$query="SELECT * FROM `blog` ORDER BY `id` DESC ";
$d1=mysqli_query($dbcon,$query);
while($res1=mysqli_fetch_array($d1))

{
?>
		<div class="col-md-4 aboutleft">
			<a href="blog-details.php?post_id=<?php echo $res1['id'];  ?>">
              <img src="admin/<?php echo $res1['image'];?>" alt="" class="img-responsive" style="height:200px;" />
			</a>
		</div>
		<div class="col-md-8 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					

						<li>
							<p>Posted on:- <?php echo $res1['date']; ?></p>
							
							<a href="blog-details.php?post_id=<?php echo $res1['id'];  ?>">
                           <h3><?php echo $res1['title']; ?></h3>
							</a>
							
							
							<blockquote>
								<p><?php echo $res1['description']; ?>.</p>
								<footer>
									<?php echo $res1['author']; ?> .
								</footer>
							</blockquote>
							<a href="blog-details.php?post_id=<?php echo $res1['id'];  ?>">Learn More</a>
						</li>
					</ul>
				</div>
			</section>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php 

	}
	?>
		<div class="clearfix"></div>
		
	</div>
</div>
<!-- About -->

<!--Blog Section Ends-->




<?php 

include 'footer.php';
?>