<?php

session_start();
if($_SESSION['userid']=="")
{   
    header("location:login.php");
}

else
{
$file='Resume/my_cv.pdf';
$filename='Resume/my_cv.pdf';
header('content-type:application/pdf');
header('content-Dispositon:inline;filename="'.$filename.'"');
header('Content-Transfar-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file);
}
?>
<?php
include 'config.php';
$user=$_GET['user'];
$phone=$_GET['phone'];
$time=date_time_set();
$query="INSERT INTO `track_resume_printout`(`id`,`user`,`phone`,`time`) VALUES ('','".$user."','".$phone."','".$time."')";
mysqli_query($dbcon,$query);


?>