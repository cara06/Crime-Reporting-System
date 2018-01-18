<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$city =$_POST['city'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];

    $insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."','".$contactno."',
											  '".$emailid."','".$_SESSION['username']."',
											  '".$city."','".$pincode."' )";
	$msg = base64_encode("Your FIR is Registered Successfully");
	
	if(mysql_query($insertQuery))
	{   
		$getidQuery = "select *from mstr_profile order by id desc limit 1";
	    $rsgetid = mysql_query($getidQuery);
	    while($rowgetid = mysql_fetch_array($rsgetid))
	    {
	      $victim_id = $rowgetid['id'];     
	      $_SESSION['victim_id'] = $victim_id;    
	      $insertfirQuery = "insert into fir_details (date,time,description,crime_id,id_proof,
		                                              id_proof_no,crimephoto1,crimephoto2,
													  crimelocation,reg_id,claim_id,victim_id,area_id,status) 
	                                       values ('".$_SESSION['date']."','".$_SESSION['time2']."',
										           '".$_SESSION['crimedesc']."',
												   '".$_SESSION['crimetype']."',
												   '".$_SESSION['idproof']."',
												   '".$_SESSION['idproofno']."',
												   '".$_SESSION['crimephoto1']."',
												   '".$_SESSION['crimephoto2']."',
												   '".$_SESSION['crimelocation']."',
												   '".$_SESSION['reg_id']."',
												   '".$_SESSION['claim_id']."',
												   '".$_SESSION['victim_id']."',
												   '".$_SESSION['area_id']."',0)";					   
         }
		//echo 	$insertfirQuery;
		if(mysql_query($insertfirQuery))
		{
		    header("location:FIRreg3.php?msg=Your FIR is Registered Successfully");	  
	    }
	}
	else
	{
		//echo "$insertfirQuery";
		header("location:FIRreg3.php?msg=FIR not registered");
	}
?>