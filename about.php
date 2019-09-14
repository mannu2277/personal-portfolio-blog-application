<?php 
include 'header.php';
include 'config.php';
?>

<!-- About -->
<?php 
include 'config.php';
$query="SELECT * FROM `personal_info` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
<div class="about" id="about" >
	<div class="container">
		<h3 class="heading">About Me</h3>
		<div class="col-md-6 aboutleft">
			<img src="admin/<?php echo $res['image'];?>" alt="" class="img-responsive" style="height:400px" />
		</div>
		<div class="col-md-6 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h3>Personal information</h3>
							<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li><b>D.O.B</b></li>
										<li><?php echo $res['dob'];?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>PHONE</b></li>
										<li><?php echo $res['phone'];?></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>EXPERIENCE</b></li>
										<li>+<?php echo $res['experience'];?> Years</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>ADDRESS </b></li>
										<li><?php echo $res['address'];?>.</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>E-MAIL </b></li>
										<li><a href="mailto:<?php echo $res['email'];?>"> <?php echo $res['email'];?></a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>WEBSITE </b></li>
										<li><a href="<?php echo $res['website'];?>"><?php echo $res['website'];?></a></li>
									</ul>
								</li>
							</ul>
							<div class="clearfix"></div>
							<ul class="hireme">
								<li><a href="#" class="w3ls_more">Talk to me</a></li>
								<li><a href="pdfresume.php" class="w3l_contact"><i class="fa fa-download" aria-hidden="true"></i> Download Resume</a></li>
							</ul>
						</li>

						<li>
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
						</li>
					</ul>
				</div>
			</section>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- About -->
<?php 
include 'footer.php';

?>
