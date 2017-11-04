<?php
include("../connection.php");
$pat_id=$_REQUEST['pat_id'];
$delete="delete from tbl_patient where patient_id='$pat_id'";
mysql_query($delete);
header("Location:view_pat.php");

?>