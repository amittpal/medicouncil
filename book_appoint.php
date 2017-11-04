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
<form action="" method="post">
<select name="speciality">
<?php
$select="select distinct(speciality) from tbl_doctor where status='Y'";
$res=mysql_query($select);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option>
<?php
echo $row['speciality'];
?>
</option>
<?php
}
?>
</select>
<button type="submit" name="btn">Select</button>
</form>

<?php
if(isset($_POST['btn']))
{
	$speciality=$_POST['speciality'];
	//echo $speciality;
	?>
	<table border="2" align="center">
	<tr>
	<th>Doctor_name</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Speciality</th>
	<th>Fees</th>
	<th>Experience</th>
	<th>Timing</th>
	<th>Contact</th>
	<th>Address</th>
	<th>Book Appointment</th>
	</tr>
	<?php
	$s="select * from tbl_doctor where speciality='$speciality'";
	$res1=mysql_query($s);
	while($row1=mysql_fetch_array($res1,MYSQL_BOTH)){
	?>
	<tr>
	<td><?php echo $row1[1] ;?></td>
	<td><?php echo $row1[2] ;?></td>
	<td><?php echo $row1[4] ;?></td>
	<td><?php echo $row1[6] ;?></td>
	<td><?php echo $row1[7] ;?></td>
	<td><?php echo $row1[9] ;?></td>
	<td><?php echo $row1[8] ;?></td>
	<td><?php echo $row1[10] ;?></td>
	<td><?php echo $row1[11] ;?></td>
	<td><a href="book_doc.php?id=<?php echo $row1[0] ;?>">Book</a></td>
	</tr>
	<?php
	}

}
?>
</table>
</div>
</body>
</html>
