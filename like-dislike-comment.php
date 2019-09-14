<?php 
session_start();
?>
<?php
include 'config.php';
$bid=$_GET['blog_id'];
$action=$_GET['action'];
if($action=="like_event")
{
	$query="SELECT * FROM `blog` WHERE `id` = '".$bid."'";
$d1=mysqli_query($dbcon,$query);
$result=mysqli_fetch_array($d1);

	extract($_POST);
	$query2="INSERT INTO `like_count` (`id`,`blog_id`,`blog_title`,`user`,`phone`,`time`) VALUES ('','".$bid."','".$result['title']."','".$_SESSION['userid']."','".$_SESSION['phone']."','')";
	mysqli_query($dbcon,$query2);
	if(mysqli_affected_rows($dbcon)>0)
	{
		header("location:blog-details.php?post_id=$bid ");
	}
	else
	{
		echo "failed";
	}


}
else
	if($action=="dislike_event")
{
	$query="SELECT * FROM `blog` WHERE `id` = '".$bid."'";
$d1=mysqli_query($dbcon,$query);
$result=mysqli_fetch_array($d1);

	extract($_POST);
	$query2="INSERT INTO `dislike_count` (`id`,`blog_id`,`blog_title`,`user`,`phone`,`time`) VALUES ('','".$bid."','".$result['title']."','".$_SESSION['userid']."','".$_SESSION['phone']."','')";
	mysqli_query($dbcon,$query2);
	if(mysqli_affected_rows($dbcon)>0)
	{
		header("location:blog-details.php?post_id=$bid ");
	}
	else
	{
		echo "failed";
	}


}

?>
<?php 
$like=$_GET['like_count'];
$dislike=$_GET['dislike_count'];
$query4="SELECT * FROM `reaction_count` WHERE `blog_id` = '".$bid."'";
$d1=mysqli_query($dbcon,$query4);
$num=mysqli_num_rows($d1);
if($num==0 )
{

$query3="INSERT INTO `reaction_count`(`id`,`blog_id`,`blog_title`,`date`,`like`,`dislike`) VALUES('','".$bid."','".$result['title']."','".$result['date']."','".$like."','".$dislike."')";

}
else
{

	$query3="UPDATE `reaction_count` SET `blog_id`='".$bid."' ,`like`='".$like."',`dislike`='".$dislike."'  WHERE `blog_id`='".$bid."'";
}
mysqli_query($dbcon,$query3);

?>