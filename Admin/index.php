<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1){
	echo "invalid email or password";
}
if($msg==2){
	echo "Successfully Logout";
}
if($msg==3){
	echo "Please  Login";
}
?>
<html>
<head>
<style>
#login{
width:320px;height:250px;border:5px solid gray;margin:0px auto;padding:10px;border-radius:25px;
}
input{
width:300px;height:35px;border:3px solid gray;margin:10px auto;
}
</style>
</head>
<body bgcolor="lightgreen">
<h1 align="center">Admin Login</h1>
<div id="login">
<center>
<form method="post" action="admin_code.php">
Username<br/><input name="username"><br/>
Password<br/><input type="password" name="password"><br/>
<input type="submit" value="Login">
</center>
</form>
</div>
</body>
<html>