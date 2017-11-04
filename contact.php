<?php

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<script type="text/JavaScript" language="JavaScript">
		function validate()
		{
		  if(frm.name.value=="")
		  {
		    alert("Enter your name");
		    frm.nm.focus();
		  }
		  else if(frm.email.value=="")
		  {
		    alert("Enter your e-mail id please");
		    frm.mbl.focus();
		  }
		  else if(isNaN(frm.contact.value))
		  {
		    alert("Mobile number should be in numbers only");
		    frm.mbl.focus();
		  }
		  else if(frm.contact.value.length!=10)
		  {
		     alert("Mobile Number is not correct");
		     frm.mbl.focus();
		  }
		  else if(frm.message.value=="")
		  {
		    alert("Enter your message");
		    frm.addr.focus();
		  }
		  else if(frm.email.value=="")
		  {
		    alert("Enter your email id");
		    frm.email.focus();
		  }
		  else if(frm.pass.value=="")
		  {
		    alert("Enter your password");
		    frm.pass.focus();
		  }
		  else if(frm.re_pass.value=="")
		  {
		    alert("Re-enter your password");
		    frm.re_pass.focus();
		  }
		  else if(frm.pass.value==frm.re_pass.value)
		  {
		   frm.submit();
		  }
		  else{
		    alert("You have entered different passwords");
		    frm.re_pass.focus(); 
		  }
		}
	</script>
<style>
#con{
width:360px;height:380px;border:5px solid gray;margin:0px auto;padding:10px;border-radius:25px;
}
input,textarea{
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
	</div>
<center>
<h1>Contact Us</h1>
<div id="con">
<form action="con_code.php" method="post" name="frm">
Name<br/><input type="text" name="name" required="required"/><br/>
Email<br/><input type="email" name="email" required="required"/><br/>
Contact<br/><input type="number" name="contact" required="required"/><br/>
Message<br/><textarea name="message" required="required"></textarea><br/><br/>
<input type="submit" value="Send" required="required"/>
</form>
</center>
</div>
</body>
</html>