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
<a href="#"><button  class="btn">View Appointment</button></a>
<a href="doc_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
<h1 align="center" style="color:blue">View your appointment</h1>
<table border="2" align="center">
<tr>
<th>S no</th>
<th>Patient Name</th>
<th>Father Name</th>
<th>Gender</th>
<th>Email</th>
<th>Mobile</th>
<th>Age</th>
<th>Cancel Appointment</th>
</tr>
<?php
$query1="select * from tbl_appoint where doct_id='$doc_id'";
$res1=mysql_query($query1);
$sn=1;
while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$pat_id=$row1[1];
	$query2="select * from tbl_patient where patient_id='$pat_id'";
	$res2=mysql_query($query2);
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH)){
?>
		<tr>
		<td><?php echo $sn;?></td>
		<td><?php echo $row2[1];?></td>
		<td><?php echo $row2[2];?></td>
		<td><?php echo $row2[3];?></td>
		<td><?php echo $row2[4];?></td>
		<td><?php echo $row2[7];?></td>
		<td><?php echo $row2[6];?></td>
		<td align="center"><a href="cancel.php?pat_id=<?php echo $pat_id;?>"><img src="delete.png"/></a></td>
		</tr>
<?php
	}
	$sn++;
}
?>
</table>
</div>
</body>
</html>
<?php
}
?>

