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
	$pass=$row[5];
{
?>
<html>
<head>
<link href="doc_style.css" rel="stylesheet" type="text/css"/>
<script src="jquery-3.2.0.min.js"></script>
<script>
$(document).ready(function(){
	$("#txt1").blur(function(){
		var t1=$("#txt").val();
		var t2=$(this).val();
		if(t1==t2){
			$(this).css("border","5px solid green");
		}
		else{
			$(this).css("border","5px solid red");
			$(this).focus();
		}
	})
	$("#txt3").blur(function(){
		var t3=$("#txt2").val();
		var t4=$(this).val();
		if(t3==t4){
			$(this).css("border","5px solid green");
			}
		else{
			$(this).css("border","5px solid red");
			$(this).focus();
		}
	})
})
</script>
<style>
input{
	width:200px;height:40px;border-radius:5px;margin:2px;
}
</style>
</head>
<body>
<div id="outer"><br/>
<a href="pat_profile.php"><button  class="btn">Dashboard</button></a>
<a href="#"><button  class="btn">Change Password</button></a>
<a href="view_appoint.php"><button  class="btn">View Appointment</button></a>
<a href="pat_update_profile.php"><button class="btn">Update Profile</button></a>
<a href="book_appoint.php"><button class="btn">Book Appointment</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
<h1 align="center" style="color:blue">Password Change</h1>
<form action="update_doc_pass.php" method="post" align="center">
<input type="hidden" id="txt" value="<?php echo $pass;?>">
<input type="password" id="txt1" placeholder=" enter old password"><br/></br>
<input type="password" id="txt2" placeholder="Enter New password"><br/></br>
<input type="password" id="txt3" placeholder="Re-Enter New password" name="pass"><br/></br>
<button type="submit" class="btn">change password</button>
</form>
</div>
</body>
</html>
<?php
}
?>

