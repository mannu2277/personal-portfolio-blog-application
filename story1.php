<?php

session_start();
if($_SESSION['userid']=="")
{   
    header("location:login.php");
}

else
{
$file='stories/lovestory3.pdf';
$filename='stories/lovestory3.pdf';
header('content-type:application/pdf');
header('content-Dispositon:inline;filename="'.$filename.'"');
header('Content-Transfar-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file);
}
?>
