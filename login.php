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
if($msg==4){
	echo "Registered Successfully";
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style>
.log{
	width:350px;height:100;border:5px solid gray;margin:5px auto;padding:5px;border-radius:25px;
}
#menu{
	border-radius:20px;padding-left:1px;margin-left:30px;margin:5px auto
}
</style>
</head>
<body bgcolor="lightgreen">
<div id="menu">
		<ul>
		    <li><a href="index.php">Home</a></li>
			<li><a href="doctor.php">Doctor</a></li>
			<li><a href="patient.php">Patient</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="calculator.php">Calculator</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
	</div>
<h1 align="center">Log in</h1>
<div class="log">
<form method="post" action="logcode.php">
<center>
<table>
<tr><td>Select who u r   </td><td><select name="user">
<option>-select-</option>
<option>Doctor</option>
<option>Patient</option>
</select></td></tr>
<tr><td>Email </td><td><input type="email" name="email" required="required"/></td></tr>
<tr><td>Password </td><td><input type="password" name="pass" required="required"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" required="required"/></td></tr>
</table>
</center>
</form>
</div>
</body>
</html>