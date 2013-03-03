<style type="text/css">
p {
  color: #FFF;
}
body p {
	text-align: center;
}
form {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	text-align: center;
	color: #FFF;
}
table {text-align:left; }
</style>
<p>
<body bgcolor="#49494a">


<img src="logo.jpg" alt="KCIS" align="absmiddle"/>

<form action="main.php" method="post">
<center>
<TABLE BORDER=0>
            <TR>	<TD>School Name </TD><TD> <input type="text" name="school_name"> </TD> </TR>
            <TR>	<TD>Address </TD><TD> <textarea  name="addr" >  </textarea> </TD> </TR>
			<TR>	<TD>Phone Number  </TD><TD><input type="text" name="phone"  >    </TD> </TR>
			<TR>	<TD>Level</TD><TD>
                        <select name ="level">
                        <option value="freshman"> Freshman</option>
                        <option value="sophomore"> Sophomore</option>
                        <option value="junior"> Junior</option>
                        <option value="senior"> Senior</option>
                        <option value="other"> Other</option>
                        </select> </TD>
                        </TR>
                        
</TABLE>
</center>

<input type="submit" name="save" value="Save">
<input type="submit" name="cancel" value="Cancel">
</p>
 
</form>

 
 <?php
 if(isset($_GET['flag'])){
 	echo "Your Username or Password is incorrect!"; 
 } 
 ?>

</body>

