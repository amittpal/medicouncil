<?php
include('connection.php');
session_start();
//echo "Welcome Doctor Saheb";
//echo "<br/>";
//echo $_SESSION['user'];
$email=$_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH)){
?>
<html>
<head>
<style>
#outer{
	background-image:url('clinic.jpg');
	height:1000px;width:1000px;
	background-repeat:no-repeat;
	margin:0 auto;
}
#image{
	background-color:ccc;
	height:200px;width:200px;
	margin:0 auto;
	border-radius:50%;
}
#image img{
	height:200px;width:200px;
	border-radius:50%;
}
.btn{
	height:40px;
	width:100px;
	background:black;border-radius:5px;
	padding:10px;
	border:2px solid black;color:white;
	text-decoration:none;
	margin:10px;
}
</style>
</head>
<body >
<h1 align="center">Welcome to Doctor Zone<h1>
<a href="logout.php"><h3 align="right" class="btn">Logout<h3/></a>
<div id="outer">
	<div id="image">
	<center>
	<img src="doctor/<?php echo $row[3]; ?>">
	<h3><?php echo $row[1]; ?></h3>
	<h5><?php echo $row[4]; ?></h5>
	</center>
	</div>
</div>
</body>
</html>
<?php
}
?>
