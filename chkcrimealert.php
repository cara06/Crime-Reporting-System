<?php
//session_start();
include("config.php");
$alertcityname = $_POST['city'];
$alerareaname = $_POST['area'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];

$insertQuery = "insert into mstr_profile (city_id,area_id,description) values ('".$alertcityname."','".$alertareaname."','".$address."','".$pincode."')";
											  
	 $msg = base64_encode("Registered Successfully");
	
	if(mysql_query($insertQuery))
	{
		  header("location:crimealert.php?msg=Registered Successfully");	  
	 }
	else
	 {
		header("location:crimealert.php?msg=Registered Successfully");
	
  }
?>