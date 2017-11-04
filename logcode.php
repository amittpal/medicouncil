<?php
session_start();
$user=$_POST['user'];
//echo $user;
$email=$_POST['email'];
//echo $email;
$password=$_POST['pass'];
//echo $password;

mysql_connect('localhost','root','');

mysql_select_db("medi");

if($user=='Doctor')
{
	$query="select * from tbl_doctor where email='$email' and password='$password' and status='Y'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['user']=$email;
		header("Location:doc_profile.php");
	}
	else{
		header("Location:login.php?msg=1");
	}
}
else if($user=='Patient')
{
	$query="select * from tbl_patient where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['user']=$email;
		header("Location:pat_profile.php");
	}
	else{
		header("Location:login.php?msg=1");
	}
}
else{
	header("Location:login.php?msg=1");
}
?>