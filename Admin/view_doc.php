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
function demo(u){
var btn=$(u)
var btn_id=btn.attr("id");	
var btn_txt=btn.text();	
alert(btn_txt);
//Ajax Part
$.ajax({
	type:"post",
	url:"update_status.php",
	data:"id="+btn_id+"="+btn_txt,
	success:function(res){
		btn.text(res);
	}
})



}
</script>
</head>
<body>
<div id="header" >
All Doctor
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
<th>Gender</th>
<th>Pic</th>
<th>Email</th>
<th>Speciality</th>
<th>Fees</th>
<th>Timing</th>
<th>Experience</th>
<th>Contact</th>
<th>Address</th>
<th>Status</th>
<th>Date of Registration</th>
<th>Delete</th>
</tr>
<?php
$i=1;
$select="select * from tbl_doctor";
$res=mysql_query($select);
while($row=mysql_fetch_array($res,MYSQL_BOTH)){
	?>
	<tr align="center">
	<td><?php echo $i;?></td>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><img src="../doctor/<?php echo $row[3]; ?>"  height="100px" width="100px"/></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[7];?></td>
	<td><?php echo $row[8];?></td>
	<td><?php echo $row[9];?></td>
	<td><?php echo $row[10];?></td>
	<td><?php echo $row[11];?></td>
	<td><button id="<?php echo $row[0];?>" onclick="demo(this)"><?php echo $row[12];?></button></td>
	<td><?php echo $row[13];?></td>
	<td><a href="del_doc.php?doc_id=<?php echo $row[0];?>"><img src="../delete.png"/></a></td>
</tr>
	<?php
	$i++;
}


?>


</table>
</div>
</body>
</html>