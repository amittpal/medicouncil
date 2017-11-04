<?php
session_start();
include('connection.php');
$name=$_POST['name'];
//echo $name;
$fees=$_POST['fees'];
//echo $fees;
$timing=$_POST['time'];
//echo $timing;
$expr=$_POST['expr'];
//echo $expr;
$address=$_POST['address'];
//echo $address;
$contact=$_POST['contact'];
//echo $contact;
$email=$_SESSION['user'];

$update="update tbl_doctor set name='$name',timing='$timing',expr='$expr',fees='$fees',address='$address',contact='$contact' where email='$email'";

mysql_query($update);

header("Location:doc_profile.php");
?>