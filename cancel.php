<?php
session_start();
include('connection.php');
$email=$_SESSION['user'];
$pat_id=$_REQUEST['pat_id'];
echo $pat_id;
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
	$doc_id=$row[0];
$cancel="delete from tbl_appoint where pat_id='$pat_id' and doct_id='$doc_id'";
mysql_query($cancel);
header("location:view_doc_appoint.php");
?>