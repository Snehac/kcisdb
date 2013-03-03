<?php

	$username = $_GET['fname'];
	$password = $_GET['lname'];

	if ($username != "admin" || $password != "123") {
		
		header("Location: index.php?flag=wrong");
		
	} 
?>

<style type="text/css">
p {
	color: #000;
}
body p {
	text-align: center;
}
table {text-align:right;}
body{background-image:url('abc_4.jpg');
form {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 20px;
	text-align: left;
	color: #000
}
</style>

<body bgcolor="#73B500"><B>
<center>
<img src="logo.png" alt="KCIS" align="center"/>

<form action="school_op.php">
  <TABLE BORDER=0>
  <tr><td>  <p> <input type="radio" name="fname">  School  </p>  </td></tr>
   <tr><td> <p> <input type="radio" name="lname">  Student  </p> </td></tr>
   <tr><td> <p> <input type="radio" name="lname">  Sponsor  </p>  </td></tr>
   <tr><td> <p> <input type="radio" name="lname">  Transaction </p></td></tr>
   <tr><td> <p> <input type="radio" name="lname">  Report </p> </td></tr>
  </TABLE>
<input type="submit" value="Submit by Choosing Option !!">  
</form>
</center>
</body>




