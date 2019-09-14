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
<!-- About -->
<?php 
include 'config.php';
$query="SELECT * FROM `temp` WHERE `email` ='".$_SESSION['userid']."' AND `phone` ='".$_SESSION['phone']."' ";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
<div class="about" id="about" >
	<div class="container">
		<h3 class="heading">User Profile </h3>
		
		
		<div class="col-md-6 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h3><?php echo $_SESSION['userid'];?></h3>
							<ul class="address">
								
								<li>
									<ul class="agileits-address-text">
										<li><b>PHONE</b></li>
										<li><?php echo $_SESSION['phone'];?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>NAME</b></li>
										<li><?php echo $res['name'];?></li>
									</ul>
								</li>
									<li>
									<ul class="agileits-address-text">
										<li><b>PURPOSE</b></li>
										<li><?php echo $res['purpose'];?></li>
									</ul>
								</li>
							</ul>
							<div class="clearfix"></div>
							<ul class="hireme">
								<!--<li><a href="#" class="w3ls_more">Talk to me</a></li>-->
								<li><a href="share-it.php" class="w3l_contact"><i class="fa fa-share" aria-hidden="true"></i> Share It Up</a></li>
							</ul>
						</li>

						<!--<li>
							<?php 
                            include 'config.php';
                            $query="SELECT * FROM `personal_info_2` ORDER BY `id` DESC";
                            $d1=mysqli_query($dbcon,$query);
                            $res1=mysqli_fetch_array($d1)


                             ?>
							<h3><?php echo $res1['main_heading']; ?></h3>
							<h4><?php echo $res1['sub_heading']; ?></h4>
							<p><?php echo $res1['brief_des']; ?> .</p>
							<p><?php echo $res1['detail_description']; ?>.</p>
						</li>-->
					</ul>
				</div>
			</section>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="col-md-6 aboutleft">
			<fieldset>
				<legend>
					Comments/Compliments
				</legend>
				<form>
					<div class="form-group">
                    <textarea name="comments" class="form-control" rows="8" placeholder="Your Comments">
                    	
                    </textarea>
					</div>

				</form>
			</fieldset>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- About -->
<?php 
include 'footer.php';

?>
