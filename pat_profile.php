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
?>
<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer"><br/>
<a href="#"><button  class="btn">Dashboard</button></a>
<a href="pat_change_password.php"><button class="btn">Change Password</button></a>
<a href="view_appoint.php"><button class="btn">View Appointment</button></a>
<a href="book_appoint.php"><button class="btn">Book Appointment</button></a>
<a href="pat_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="logout.php"><button class="btn">Logout</button></a>
<h1 align="center" style="color:blue">Welcome to Patient Zone</h1>
<center>
<h1><?php echo $row[1];?></h1>
<h1><?php echo $row[4];?></h1></center>

</div>
</body>
</html>
<?php
}
?>

