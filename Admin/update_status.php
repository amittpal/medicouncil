<?php
include("../Connection.php");
$btn_id=$_POST['id'];

$a=explode("=",$btn_id);
$id=$a[0];
$txt=$a[1];
if($txt=='N')
	$txt='Y';
else
	$txt='N';
$q=mysql_query("update tbl_doctor set status='$txt' where doctor_id='$id'");
if(!$q)
	echo "$txt";
else
	echo "$txt";

?>