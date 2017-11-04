<?php
session_start();
if($_SESSION['admin']==""){
	session_destroy();
	header("Location:index.php?msg=3");
}
?>
<html>
<head>
<link href="admin_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header" >
Welcome to Admin Zone
</div>
<div id="main">
<center>
<a href="admin_zone.php"><button  class="btn">Dashboard</button></a>
<a href="ad_change_password.php"><button  class="btn">Change Password</button></a>
<a href="view_doc.php"><button  class="btn">View Doctor</button></a>
<a href="view_pat.php"><button class="btn">View Patient</button></a>
<a href="view_app.php"><button class="btn">View Appointment</button></a>
<a href="logout.php"><button  class="btn">Logout</button></a>
<center>
</div>
</body>
</html>