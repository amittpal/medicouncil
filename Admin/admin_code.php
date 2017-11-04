<?php
session_start();
include('../connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from tbl_admin where username='$username' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['admin']=$username;
		header("Location:admin_zone.php");
	}
	else{
		header("Location:index.php?msg=1");
	}
?>