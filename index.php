<?php

include 'header.php';
?>

<!-- //Header Ends -->

<!-- Banner -->
<?php 
include 'config.php';
$query="SELECT * FROM `top_banner` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
<div class="banner" style="background:url(admin/<?php echo $res['image'];  ?>)             ">
	<!--no-repeat 1000px -150px;-->
	<div class="container" ">
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h1><?php echo $res['name'];  ?> </h1>
					<h2 class="rw-sentence">
                     <span style="color: white">S/O Arun Kumar Choudhary & Babli Devi
					</h2>
					
					<h2 class="rw-sentence">
					<span style="color: white"><?php echo $res['primary_desig'];  ?> and</span>
					<div class="rw-words rw-words-1">
						<span><?php echo $res['sec_desig_1'];  ?>.</span>
						<span><?php echo $res['sec_desig_2'];  ?></span>
						<span><?php echo $res['sec_desig_3'];  ?></span>
						<span><?php echo $res['sec_desig_4'];  ?></span>
						<span><?php echo $res['sec_desig_5'];  ?></span>
						<span><?php echo $res['sec_desig_6'];  ?></span>
					</div>
					</h2>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="<?php echo $res['fb'];  ?>" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['twitter'];  ?>" class="twitter"> 
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['insta'];  ?>" class="instagram">
							<div class="front"><i class="fa fa-github" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-github" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['linkedin'];  ?>" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
						</li>
					</ul>
				</div>
			</div>
	</div>
	<div id="marque" style="background-color: rgba(0,0,0,.5);">
              <!-- <marquee>
               	<h2 class="rw-sentence">
                     
                     		Please Login first to get full access to this web portal.In Case of trouble in Login mail me at <u>mannukumar7891@gmail.com</u>
                     
					</h2>
				</marquee>-->


	</div>

	</div>
<!-- //Banner -->

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
								<li><a href="pdfresume.php" class="w3l_contact"><i class="fa fa-print" aria-hidden="true"></i> Print Resume</a></li>
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
		<div class="clearfix"></div>
	</div>
</div>
<!-- About -->
<!-- Skills -->


<section class="skills" id="skills">
	<div class="container">
			<h3 class="heading">Skills</h3>
		<div class='col-md-8 bar'>
			<!-- Skills Introductory Query -->
<?php 
include 'config.php';
$query="SELECT * FROM `skill_intro` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
<!-- Skills Introductory Query -->
		<p class="bar-p"><?php echo $res['introduction']; ?>.</p>
			<div class="col-md-6 group">
				<div class='bar_left'>
					<div class='bar_group'>
						<!-- Technical  Skills  Query -->
                        <?php 
                        include 'config.php';
                        $query="SELECT * FROM `tech_skills` ";
                         $d1=mysqli_query($dbcon,$query);
                         $row=mysqli_num_rows($d1);
                         $half=$row/2;
                         $half=ceil($half);
                         $half=$half;
                         $query1="SELECT * FROM `tech_skills` limit 0,$half ";
                        $d2=mysqli_query($dbcon,$query1);
                        while( $res=mysqli_fetch_array($d2))
                        {
                         ?>
                        
						<div class='bar_group__bar thin' label='<?php echo $res['name'];   ?>' show_values='true' value="<?php echo $res['min_rating']; ?>">
							
						</div>
						<?php 
                       }
                       ?>
						
					</div>
				</div>
			</div>
			<div class="col-md-6 group">
				<div class='bar_right'>
					<div class='bar_group'>
						<?php 
                      
                       $query1="SELECT * FROM `tech_skills` limit $half,$row ";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res=mysqli_fetch_array($d2))
                       {
						?>
						<div class='bar_group__bar thin' label='<?php echo $res['name'];   ?>' show_values='true' value='<?php echo $res['min_rating'];   ?>'>
							
						</div>
						<?php 
					   }
					   ?>
					</div>
				</div>
			</div>
			<div class='clearfix'></div>
		</div>
		<div class="col-md-4 skillsright">
			<h3 class="bar-h3">About my skills</h3>
				<!-- Skills Introductory Query -->
<?php 
include 'config.php';
$query="SELECT * FROM `about_skills` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
			<h5 class="bar-p"><i><?php echo $res['heading']; ?></i></h5>
			<p class="bar-p"><?php echo $res['sub_heading'] ?>.</p>
			<p class="bar-p"><?php echo $res['description'] ?>.</p>
		</div>
		<div class='clearfix'></div>
	</div>
</section>
<!-- //Skills -->










<!--
Skills Section Ends
-->




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
<!--Blog Section Starts-->
<!-- About -->

<div class="about" id="blogs" >
	<div class="container">
		<h3 class="heading">Blogs</h3>
		<?php 
include 'config.php';
$qq1="SELECT * FROM `reaction_count`";
$dd1=mysqli_query($dbcon,$qq1);
$rr1=mysqli_fetch_array($dd1);
$query="SELECT * FROM `blog` ORDER BY `id` DESC LIMIT 0,4";
$d1=mysqli_query($dbcon,$query);
while($res1=mysqli_fetch_array($d1))

{
?>
		<div class="col-md-4 aboutleft">
			<a href="blog-details.php">
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
							<i class="fa fa-thumbs-up" style="color:#146eb4"><?php echo $rr1['like'];  ?></i>
							<i class="fa fa-thumbs-down" style="color:#146eb4"><?php echo $rr1['dislike'];  ?></i>
							<i class="fa fa-comment" style="color:#146eb4"></i>
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
<!-- Footer Starts -->
<?php
include 'footer.php';
?>
<!-- Footer Ends-->
