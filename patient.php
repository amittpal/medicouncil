<?php

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style>
.pat{
	width:350px;height:300;border:5px solid gray;margin:5px auto;padding:5px;border-radius:25px;
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
<center>
<h1>Patient Registration</h1>
<div class="pat">
<form action="pat_code.php" method="post">
<table border="0" cellpadding="3"height="300"><tr>
<td>Patient name</td><td><input type="text" name="name" required="required"/></td></tr>
<td>Father name</td><td><input type="text" name="fname" required="required"/></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gen" value="male" required="required"/>Male<input type="radio" name="gen" value="female"/>Female</td></tr>
<tr><td>Email</td><td><input type="email" name="email" required="required"/></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required="required"/></td></tr>
<tr><td>Age</td><td><input type="number" name="age" required="required"/></td></tr>
<tr><td>Contact</td><td><input type="number" name="contact" required="required"/></td></tr>
<tr><td colspan="2" align="center"><input type="Submit" value="Register" required="required"/></td></tr>
</table>
</form>
</center>
</div>
</body>
</html>