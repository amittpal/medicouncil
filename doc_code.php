<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['gen'];
//echo $gender;
$pic=$_FILES['file']['name'];
//echo $pic;
$size=$_FILES['file']['size'];
//echo $size;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$spec=$_POST['spec'];
//echo $spec;
$fees=$_POST['fees'];
//echo $fees;
$timing=$_POST['time'];
//echo $timing;
$experience=$_POST['expr'];
//echo $experience;
$address=$_POST['address'];
//echo $address;
$contact=$_POST['contact'];
//echo $contact;

$location="doctor/";

mysql_connect('localhost','root','');

mysql_select_db("medi");

$query="insert into tbl_doctor (name,gender,pic,expr,email,password,speciality,fees,timing,contact,address,status,dor) values ('$name','$gender','$pic','$experience','$email','$password','$spec','$fees','$timing','$contact','$address','N',curdate())";

mysql_query($query);

move_uploaded_file($tmp_name,$location.$pic);

header("Location:login.php?msg=4");

?>