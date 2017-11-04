<?php
session_start();
include("connection.php");
$pass=$_POST['pass'];
echo $pass;
$email=$_SESSION['user'];
$update="update tbl_doctor set password='$pass' where email='$email'";
mysql_query($update);
header("location:logout.php");
?>