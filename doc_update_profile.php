<?php
session_start();
//echo "Welcome Doctor Saheb";
//echo "<br/>";
//echo $_SESSION['user'];
$email= $_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
include('connection.php');
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$doc_id=$row[0];
?>
<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer"><br/>
<a href="doc_profile.php"><button  class="btn">Dashboard</button></a>
<a href="doc_change_password.php"><button  class="btn">Change Password</button></a>
<a href="view_doc_appoint.php"><button  class="btn">View Appointment</button></a>
<a href="doc_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
<h1 align="center" style="color:blue">Update your profile</h1>
<form action="doc_update_profile_code.php" method="post">
<table border="0" align="center"><tr>
<td>Doctor name</td><td><input type="text" name="name" value="<?php echo $row[1];?>"/></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees" value="<?php echo $row[7];?>"/></td></tr>
<tr><td>Timing</td><td><input type="text" name="time" value="<?php echo $row[8];?>"/></td></tr>
<tr><td>Experience</td><td><input type="number" name="expr" value="<?php echo $row[9];?>"/></td></tr>
<tr><td>Contact</td><td><input type="number" name="contact" value="<?php echo $row[10];?>"/></td></tr>
<tr><td>Address</td><td><textarea name="address"><?php echo $row[11];?></textarea></td></tr>
<tr><td colspan="2" align="center"><input type="Submit" value="Update"/></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php
}
?>


