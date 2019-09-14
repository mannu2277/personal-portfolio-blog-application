<?php 
include 'header.php';
include 'config.php';


?>
<?php 

if(isset($_POST['register']))
{
	extract($_POST);
$query="INSERT INTO `temp`(`id`,`name`,`email`,`phone`,`purpose`,`date`,`time`) VALUES ('','".$name."','".$email."','".$phone."','".$purpose."','".$date."','".$time."')";
mysqli_query($dbcon,$query);
if(mysqli_affected_rows($dbcon)>0)
{
	$wrong_id_pw="<div class='alert alert-success' style='background-color:green;color:white'><span>Success!</span>
		 Process under Admin Authentication..Please Login After sometime or Contact Admin for Fast Verification</div>";
}
else
{
	echo'<script>

alert("Registration Failed..Please try again");
	</script>';
}
}

?>

<div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">First Time User</h3>
		<div class="text-center"><?php echo @$wrong_id_pw;?></div>
		<div class="col-md-4 address">
			
		</div>
		<div class="col-md-4 form">
			<form action="#" method="post">
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
						<input type="date" name="date" required="" style="border: none;text-align: right">
						<label>Date</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="Time" name="time" required="" style="border: none;text-align: right">
						<label>Time</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="purpose" required=""></textarea>
						<label>Purpose of Requesting Access</label>
						<span></span>
					</div>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="Register" name="register">
			</form>
             
		</div>
		<div class="col-md-4 map">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->



<?php 
include 'footer.php';

?>