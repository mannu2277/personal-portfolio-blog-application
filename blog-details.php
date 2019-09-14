

<?php 
session_start();
if($_SESSION['userid']=="")
{
	header("location:login.php");
}

?>
<?php 
include 'header2.php';
include 'config.php';
$post_id=$_GET['post_id'];
?>
<!--Blog Section Starts-->
<!-- About -->
<?php 
$q1="SELECT * FROM `like_count` WHERE `blog_id`='".$post_id."' ";
$d1=mysqli_query($dbcon,$q1);
$count=mysqli_num_rows($d1);
$q2="SELECT * FROM `dislike_count` WHERE `blog_id`='".$post_id."' ";
$d2=mysqli_query($dbcon,$q2);
$count2=mysqli_num_rows($d2);
?>
<div class="about" id="blogs" >
	<div class="container">
		<h3 class="heading">Blog Single</h3>
		<?php 
include 'config.php';

$query="SELECT * FROM `blog` WHERE `id` ='".$post_id."'";
$d1=mysqli_query($dbcon,$query);
while($res1=mysqli_fetch_array($d1))

{
?>
		<div class="col-md-6 aboutleft">
			
              <img src="admin/<?php echo $res1['image'];?>" alt="" class="img-responsive" />
			
		</div>
		<div class="col-md-6 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					

						<li>
							<p>Posted on:- <?php echo $res1['date']; ?></p>
							
							
                           <h3><?php echo $res1['title']; ?></h3>
							
							
							
							<blockquote>
								<p style="zoom:175%"><?php echo $res1['description']; ?>.</p>
								<footer>
									<?php echo $res1['author']; ?> .
								</footer>
							</blockquote>
							
							<a href="like-dislike-comment.php?blog_id=<?php echo $res1['id'];?>&like_count=<?php echo $count ;?>&action=like_event&dislike_count=<?php echo $count2 ;?>"
                            ><i class="fa fa-thumbs-up" name="like" style="color: #146eb4;zoom:200%"><?php echo $count ?></i></a>
							&nbsp;&nbsp;&nbsp;
							<a href="like-dislike-comment.php?blog_id=<?php echo $res1['id'];?>&dislike_count=<?php echo $count2 ;?>&action=dislike_event&like_count=<?php echo $count ;?>"
                            ><i class="fa fa-thumbs-down" name="dislike" style="color: #146eb4;zoom:200%"><?php echo $count2 ?></i></a>&nbsp;&nbsp;&nbsp;
							<i class="fa fa-comment" name="comment" style="color: #146eb4;zoom:200%"> </i>
						</li>
						
					</ul>
				</div>
			</section>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="row">
        <div class="col-sm-4">
			
            <div class="form-group">
            <textarea name="comment"   rows="5" class="form-control" placeholder="Comment">
            	

            </textarea>
            <input type="submit" name="comment_submit" class="form-control">
			</div>
		</div>
	    </div>
		<?php 

	}
	?>
		<div class="clearfix"></div>
		
	</div>
</div>
<!-- About -->

<!--Blog Section Ends-->
<!--Blog Section Starts-->
<!-- About -->

<div class="about" id="blogs" >
	<div class="container">
		<h3 class="heading" >Latest Posts</h3>
		<?php 
include 'config.php';
$query="SELECT * FROM `blog` ORDER BY `id` DESC LIMIT 0,6";
$d1=mysqli_query($dbcon,$query);
while($res1=mysqli_fetch_array($d1))

{
?>
		<div class="col-md-2 aboutleft">
			<a href="blog-details.php?post_id=<?php echo $res1['id'];  ?>">
              <img src="admin/<?php echo $res1['image'];?>" alt="" class="img-responsive" style="height:100px;" />
			</a>
		</div>
		<div class="col-md-2 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider" >
					<ul class="slides">
					

						<li>
							<p>Posted on:- <?php echo $res1['date']; ?></p>
							
							<a href="blog-details.php?post_id=<?php echo $res1['id'];  ?>">
                           <h3 style="zoom:50%" ><?php echo $res1['title']; ?></h3>
							</a>
							
							
							<!--<blockquote>
								<p ><?php echo $res1['description']; ?>.</p>
								<footer>
									<?php echo $res1['author']; ?> .
								</footer>
							</blockquote>-->
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
		<center>
			<ul class="hireme">
								
								<li><a href="blogs.php" class="w3l_contact"><i class="fa fa-more" aria-hidden="true"></i>View All Blogs</a></li>
							</ul>
		</center>
	</div>
</div>
<!-- About -->

<!--Blog Section Ends-->


<?php
include 'footer.php';
?>