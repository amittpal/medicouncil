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
<link href="admin_style.css" rel="stylesheet" type="text/css"/>
<script src="../jquery-3.2.0.min.js"></script>
<script>
$(document).ready(function(){
	
	
});

</script>
</head>
<body>
<div id="header" >
All Appointment
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
<th>Patient Name</th>
<th>Doctor Name</th>
<th>Date of Appointment</th>
</tr>
<?php
$i=1;
$select="select * from tbl_appoint";
$res=mysql_query($select);
while($row=mysql_fetch_array($res,MYSQL_BOTH)){
	?>
	<tr align="center">
	<td><?php echo $i;?></td>
	<td><?php $pat_id=$row[1];
	$res1=mysql_query("select name from tbl_patient where patient_id='$pat_id'");
	if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
		echo $row1['name'];
	?>
	</td>
	<td><?php $doc_id=$row[2];
	$res2=mysql_query("select name from tbl_doctor where doctor_id='$doc_id'");
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
		echo $row2['name'];
	?>
	</td>
	<td><?php echo $row[3];?></td>
	</tr>
	<?php
	$i++;
}
?>


</table>
</div>
</body>
</html>