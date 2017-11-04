<?php
include('connection.php');
session_start();
//echo "Welcome Patient";
//echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
echo "<br/>";
$doc_id=$_REQUEST['id'];
//echo $doc_id;
$query="select * from tbl_doctor where doctor_id='$doc_id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer"><br/>
<a href="pat_profile.php"><button  class="btn">Dashboard</button></a>
<a href="pat_change_password.php"><button class="btn">Change Password</button></a>
<a href="view_appoint.php"><button class="btn">View Appointment</button></a>
<a href="#"><button class="btn">Book Appointment</button></a>
<a href="pat_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="logout.php"><button class="btn">Logout</button></a>
<h1 align="center" style="color:blue">Book your appointment</h1>
<div style="width:500px;height:400px;background:grey;">
<table border="2" width="100%" height="90%">
<tr><td rowspan="3"><img src="doctor/<?php echo $row[3]; ?>" height="270" width="220"/></td><td>Timing:<?php echo $row[8]; ?></td></tr>
<tr><td>Experience:<?php echo $row[9]; ?></td></tr>
<tr><td>Email:<?php echo $row[4]; ?></td></tr>
<tr><td>Name:<?php echo $row[1]; ?></td><td>Contact<?php echo $row[10]; ?></td></tr>
<tr><td>Speciality<?php echo $row[6]; ?></td><td>Address<?php echo $row[11]; ?></td></tr>
</table><br/>
<center><a href="appointment.php?id=<?php echo $row[0]; ?>"><button type="submit">Book Appointment</button></a></center>
</div>
<?php
}
?>
<br/>

</div>
</body>
</html>












