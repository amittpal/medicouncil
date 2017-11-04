<?php
session_start();
//echo "Welcome Patient";
//echo "<br/>";
//echo $_SESSION['user'];
$email= $_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
include('connection.php');
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pat_id=$row[0];
?>
<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer"><br/>
<a href="pat_profile.php"><button  class="btn">Dashboard</button></a>
<a href="pat_change_password.php"><button  class="btn">Change Password</button></a>
<a href="view_appoint.php"><button  class="btn">View Appointment</button></a>
<a href="#.php"><button class="btn">Update Profile</button></a>
<a href="book_appoint.php"><button  class="btn">Book Appointment</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
<table border="2" align="center">
<h1 align="center" style="color:blue">Update your profile</h1>
<form action="doc_update_profile_code.php" method="post">
<table border="0" align="center"><tr>
<td>Patient name</td><td><input type="text" name="name" value="<?php echo $row[1];?>"/></td></tr>
<tr><td>Age</td><td><input type="text" name="fees" value="<?php echo $row[6];?>"/></td></tr>
<tr><td>Contact</td><td><input type="number" name="contact" value="<?php echo $row[7	];?>"/></td></tr>
<tr><td colspan="2" align="center"><input type="Submit" value="Update"/></td></tr>
</table>
</div>
</body>
</html>
<?php
}
?>


