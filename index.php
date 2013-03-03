/*GIT HUB*/

<style type="text/css">
p {
	color: #FFF;
}
body p {
	text-align: left;
}
form {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	text-align: left;
	color: #FFF;
}
</style>

<body bgcolor="#49494a">


<img src="logo.png" alt="KCIS" align="absmiddle"/>


<form action="main.php" method="get">
  <p>Username:
  <input type="text" name="fname">
  </p>
  <p><br>
    Password:&nbsp;
    <input type="password" name="lname">
  </p>
  <p><br>
    <input type="submit" value="Log in">
  </p>
</form>
 <?php
 if(isset($_GET['flag'])){
 	echo "Your Username or Password is incorrent!"; 
 } 
 ?> 
</body>


