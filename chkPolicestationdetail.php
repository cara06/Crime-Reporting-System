<?php
//session_start();
include("config.php");
$pstationname = $_POST['psname'];
$areaname = $_POST['area'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];
$sdate = $_POST['sdate'];
$contactperson =$_POST['contactperson'];

	$insertpsQuery = "insert into mstr_policestation (area_id,address,contact_no,
	                                                  Email_id,contact_person,starting_date,
													  policestation_name,city_id)
	                                   values('".$areaname."','".$address."','".$contactno."',
									   '".$emailid."','".$contactperson."','".$sdate."',
									   '".$pstationname."','".$city."')";
   
	
	if(mysql_query($insertpsQuery))
	{
		  header("location:viewpolice.php?msg=Registered Successfully");	  
	 }
	else
	 {
		header("location:officerdetail.php?msg=Not Registered");
	 }
?>