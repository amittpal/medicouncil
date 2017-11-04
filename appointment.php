<?php
include('connection.php');
session_start();
echo $_SESSION['user'];
$email=$_SESSION['user'];
if($_SESSION['user']==""){
	session_destroy();
	header("Location:login.php?msg=3");
}
echo "<br/>";
$doc_id=$_REQUEST['id'];
if($doc_id!=""){
$query="select patient_id from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
	$pat_id=$row['patient_id'];

$insert="insert into tbl_appoint(pat_id,doct_id,app_date) values('$pat_id','$doc_id',curdate())";
mysql_query($insert);
header("Location:view_appoint.php");
}
else{
	header("Location:pat_profile.php");
}
?>
<br/>

 