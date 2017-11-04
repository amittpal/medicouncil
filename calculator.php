 <?php
 
 ?>
 <html>
 <head>
 <link href="style.css" rel="stylesheet" type="text/css"/>
 <title>
 Calculator
 </title>
 <style>
#calc{
width:400px;height:320px;border:5px solid gray;margin:0px auto;padding:10px;border-radius:25px;
}
.inp{
width:300px;height:35px;border:3px solid gray;margin:10px auto;
}
#menu{
	border-radius:20px;padding-left:1px;margin-left:30px;margin:5px auto;
}
 </style>
 </head>
 <body bgcolor="lightgreen">
 <div id="menu">
		<ul>
		    <li><a href="index.php">Home</a></li>
			<li><a href="doctor.php">Doctor</a></li>
			<li><a href="patient.php">Patient</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="calculator.php">Calculator</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
 <center>
 <h1>Calculator</h1>
 <div id="calc">
 <form action="code.php" method="post">
  Enter First Number<br/><input type="text" name="first" class="inp" required="required"><br/><br/>
  Enter Second Number<br/><input type="text" name="second" class="inp" required="required"><br/><br/>
  Choose Operator<br/><br/><input type="radio" name="op" value="add" required="required">Addition
<input type="radio" name="op" value="sub" required="required">Substraction 
  <input type="radio" name="op" value="mul" required="required">Multiplication 
  <input type="radio" name="op" value="div" required="required">Division<br/><br/>
  <input type="submit"value="Calculate" class="inp" required="required"></br></br>
 </form>
 </div>
 </center>
 </body>
 </html>