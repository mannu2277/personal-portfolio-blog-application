<?php
include './config.php';
extract($_POST);
if(isset($submit))
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