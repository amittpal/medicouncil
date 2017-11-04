<?php

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style>
.doc{
	width:350px;height:400;border:5px solid gray;margin:5px auto;padding:5px;border-radius:25px;
}
#menu{
	border-radius:20px;padding-left:1px;margin-left:30px;margin:5px auto;
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
<h1>Doctor Registration</h1>
<div class="doc">
<form action="doc_code.php" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="3"height="400"><tr>
<td>Doctor name</td><td><input type="text" name="name" required="required"/></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gen" value="male" required="required"/>
Male<input type="radio" name="gen" value="female" required="required"/>Female</td></tr>
<tr><td>Upload Pic</td><td><input type="file" name="file" required="required"/></td></tr>
<tr><td>Email</td><td><input type="email" name="email" required="required"/></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required="required"/></td></tr>
<tr><td>Speciality</td><td><select name="spec">
<option>-select-</option>
<option>Ear</option>
<option>Eye</option>
<option>Heart</option>
<option>Liver</option>
</select></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees" required="required"/></td></tr>
<tr><td>Timing</td><td><input type="text" name="time" required="required"/></td></tr>
<tr><td>Experience</td><td><input type="number" name="expr" required="required"/></td></tr>
<tr><td>Contact</td><td><input type="number" name="contact" required="required"/></td></tr>
<tr><td>Address</td><td><textarea name="address" required="required"></textarea></td></tr>
<tr><td colspan="2" align="center"><input type="Submit" value="Register" required="required"/></td></tr>
</table>
</form>
</center>
</div>
</body>
</html>