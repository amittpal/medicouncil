<?php
include("../connection.php");
$doc_id=$_REQUEST['doc_id'];
$delete="delete from tbl_doctor where doctor_id='$doc_id'";
mysql_query($delete);
header("Location:view_doc.php");

?>