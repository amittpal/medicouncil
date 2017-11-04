<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['gen'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$age=$_POST['age'];
//echo $age;
$contact=$_POST['contact'];
//echo $contact;

mysql_connect('localhost','root','');

mysql_select_db("medi");

$query="insert into tbl_patient (name,f_name,gender,email,password,age,mobile,dor) values ('$name','$fname','$gender','$email','$password','$age','$contact',curdate())";

mysql_query($query);

header("Location:login.php?msg=4");

?>