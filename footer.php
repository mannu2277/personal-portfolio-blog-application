<div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">Get Me</h3>
		<?php 
include 'config.php';
$query="SELECT * FROM `cont_details` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
		<div class="col-md-4 address">
			<h3>Find me</h3>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Phone</p><span><?php echo $res['phone'];?></span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Email</p><a href="mailto:<?php echo $res['email'];?>"><?php echo $res['email'];?></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Address</p><span><?php echo $res['address'];?> </span> 
					
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php 
extract($_POST);
if(isset($submit_footer))
{
	$query="INSERT INTO `contact_request`(`id`,`email`,`phone`,`message`) VALUES('','".$email."','".$phone."','".$message."')";
	mysqli_query($dbcon,$query);
	if(mysqli_affected_rows($dbcon)>0)
	{
		echo'<script>
        alert("Thanks for Your Interest..See You Soon");
       
		</script>';
	}
	else
	{
		echo'<script>
        alert("OOps Its Our Fault..Please Try after Some time..");
        
		</script>';
	}
}


		?>
		<div class="col-md-4 form">
			<form action="" method="post">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="name" required=""> 
						<label>Full Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="email" required="">
						<label>Email</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="tel" name="phone" required="">
						<label>Phone Number</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="SEND" name="submit_footer">
			</form>

		</div>
		<div class="col-md-4 map">
			<?php 
include 'config.php';
$query="SELECT * FROM `google_map` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
			<?php echo $res['iframe_code'];?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->

<!-- footer -->
<div class="footer">
	<?php 
include 'config.php';
$query="SELECT * FROM `top_banner` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1);
?>
	<div class="container">
		<h3><a href="index.php">CV Forum</a></h3>
		<p>Developed by <a href="<?php echo $res['linkedin']; ?>">Mannu Kumar, S/o:- Arun Kumar Choudhary</a></p>
		
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="<?php echo $res['fb'];?>" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['twitter'];?>" class="twitter"> 
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['insta'];?>" class="instagram">
							<div class="front"><i class="fa fa-github" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-github" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="<?php echo $res['linkedin'];?>" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
						</li>
					</ul>
	</div>
</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- Navigation-JavaScript -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
<!-- //Navigation-JavaScript -->
		
<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->

<!-- bars js files -->
	<script src="js/bars.js"></script>
<!-- //bars js files -->

<!-- banner text effect js file -->
	<script src="js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>