<?php

$id = $_POST['row'];
$first_name_eng = $_POST["first_name_eng".$_POST['row']];
$last_name_eng = $_POST["last_name_eng".$_POST['row']];
$first_name_far = $_POST["first_name_far".$_POST['row']];
$last_name_far = $_POST["last_name_far".$_POST['row']];
$address = $_POST["address".$_POST['row']];
$home_phone = $_POST["home_phone".$_POST['row']];
$cell_phone = $_POST["cell_phone".$_POST['row']];
$work_phone = $_POST["work_phone".$_POST['row']];
$email = $_POST["email".$_POST['row']];
$is_active = $_POST["is_active".$_POST['row']];
$remarks = $_POST["remarks".$_POST['row']];

$con=mysqli_connect("localhost","root","","kcis_db");
  // Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

if ($_POST['submit'] == 'Save') {
	
	
	mysqli_query($con,"UPDATE sponsors SET FIRST_NAME_ENG='$first_name_eng', LAST_NAME_ENG='$last_name_eng', FIRST_NAME_FAR='$first_name_far',LAST_NAME_FAR='$last_name_far', ADDRESS='$address', HOME_PHONE='$home_phone',CELL_PHONE='$cell_phone',WORK_PHONE='$work_phone',EMAIL='$email',IS_ACTIVE='$is_active',REMARKS='$remarks' WHERE ID='$id'");
	

	} elseif($_POST['submit'] == 'Delete') {
	

	mysqli_query($con,"DELETE FROM sponsors WHERE ID='$id'");
	}



mysqli_close($con);
header("Location: sponsor_viewedit.php");

?>
