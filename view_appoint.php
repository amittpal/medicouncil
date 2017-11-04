<?php
include('connection.php');
session_start();
//echo "Welcome Patient";
//echo "<br/>";
//echo $_SESSION['user'];
$email=$_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
$query="select patient_id from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
	$pat_id=$row['0'];

?>

<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer"><br/>
<a href="pat_profile.php"><button  class="btn">Dashboard</button></a>
<a href="pat_change_password.php"><button class="btn">Change Password</button></a>
<a href="#"><button class="btn">View Appointment</button></a>
<a href="book_appoint.php"><button class="btn">Book Appointment</button></a>
<a href="pat_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="logout.php"><button class="btn">Logout</button></a>
<h1 align="center" style="color:blue">View your appointment</h1>
<table border="2" align="center">
<tr>
<th>Doctor Name</th>
<th>Gender</th>
<th>Email</th>
<th>Speciality</th>
<th>Fees</th>
<th>Experience</th>
<th>Timing</th>
<th>Contact</th>
<th>Address</th>
<th>Image</th>
</tr>
<?php
$q="select * from tbl_appoint where pat_id='$pat_id'";
$res1=mysql_query($q);
while($row1=mysql_fetch_array($res1,MYSQL_BOTH)){
	$doc_id=$row1[2];
	$query1="select * from tbl_doctor where doctor_id='$doc_id'";
	$res2=mysql_query($query1);
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH)){
?>
<tr>
<td><?php echo $row2[1] ?></td>
<td><?php echo $row2[2] ;?></td>
<td><?php echo $row2[4] ;?></td>
<td><?php echo $row2[6] ;?></td>
<td><?php echo $row2[7] ;?></td>
<td><?php echo $row2[9] ;?></td>
<td><?php echo $row2[8] ;?></td>
<td><?php echo $row2[10] ;?></td>
<td><?php echo $row2[11] ;?></td>
<td><img src="doctor/<?php echo $row2[3]; ?>" height="100" width="100"/></td>
</tr>
<?php
}
}
?>
</table>
</div>
</body>
</html>

