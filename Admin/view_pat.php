<?php
session_start();
if($_SESSION['admin']==""){
	session_destroy();
	header("Location:index.php?msg=3");
}
include("../connection.php");
?>
<html>
<head>
<link href="admin_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header" >
All patient
</div>
<div id="main">
<center>
<a href="admin_zone.php"><button  class="btn">Dashboard</button></a>
<a href="ad_change_password.php"><button  class="btn">Change Password</button></a>
<a href="view_doc.php"><button  class="btn">View Doctor</button></a>
<a href="view_pat.php"><button class="btn">View Patient</button></a>
<a href="view_app.php"><button class="btn">View Appointment</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
</center>
<br/><br/><br/><br/><hr/>
<br/>
<table border="2" cellspacing="0px" width="100%">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Father Name</th>
<th>Gender</th>
<th>Email</th>
<th>Age</th>
<th>Mobile</th>
<th>Date of Registration</th>
<th>Delete</th>
</tr>
<?php
$i=1;
$select="select * from tbl_patient";
$res=mysql_query($select);
while($row=mysql_fetch_array($res,MYSQL_BOTH)){
	?>
	<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[7];?></td>
	<td><?php echo $row[8];?></td>
	<td align="center"><a href="del_pat.php?pat_id=<?php echo $row[0];?>"><img src="../delete.png"/></a></td>
</tr>
	<?php
	$i++;
}


?>


</table>
</div>
</body>
</html>