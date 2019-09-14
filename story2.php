<?php

session_start();
if($_SESSION['userid']=="")
{   
    header("location:login.php");
}

else
{
$file='stories/MyDream.pdf';
$filename='stories/MyDream.pdf';
header('content-type:application/pdf');
header('content-Dispositon:inline;filename="'.$filename.'"');
header('Content-Transfar-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file);
}
?>
