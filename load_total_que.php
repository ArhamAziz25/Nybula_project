<?php
session_start();
include "connection.php";
$total_que=0;
$res=mysqli_query($link,"select * from questions where category='$_SESSION[exam]'");
$total_que=mysqli_num_rows($res);
echo $total_que;
?>