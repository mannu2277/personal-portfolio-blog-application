<?php
session_start(); 
include 'header.php';
include 'config.php';


?>
<?php 
if(isset($_POST['login']))
{
	extract($_POST);
	$query="SELECT * FROM `login` WHERE `email`='".$email."' and `phone`= '".$phone."' ";
	$d1=mysqli_query($dbcon,$query);
	$result=mysqli_fetch_array($d1);

	if($result['email']==$email and $result['phone']==$phone)
	{
		$_SESSION['userid']=$result['email'];
		$_SESSION['phone']=$result['phone'];
		
		
		 header("location:userprofile.php");


	}
	else
	{
		 $wrong_id_pw="<div class='alert alert-warning' style='background-color:orange;color:white'><span>Warning!</span>
		 Either Wrong Crenditals Entered or User not Verified by the Admin.</div>"; 
	}

}


?>

<div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">Login</h3>
		
		<div class="col-md-4 address">
			
		</div>
		<div class="col-md-4 form">
			<form action="" method="post">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="email" required=""> 
						<label>Registered Email <span style="color: red">*</span> </label>
						
					</div>
					
				<div class="styled-input">
						<input type="tel" name="phone" required="">
						<label>Registered Mobile <span style="color: red">*</span></label>
						<span></span>
					</div>

					<div class="clear"> </div>
				</div>
				
				<input type="submit" value="Secure Access" name="login">
			</form>
<center><a href="register.php"><b>New User ! Register Here</b></a></center>
          <div class="text-center"><?php echo @$wrong_id_pw;?></div>
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