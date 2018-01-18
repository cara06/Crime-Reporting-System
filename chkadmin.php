<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$profilephoto="upload/".$_FILES['photo']['name'];
$username=$_POST['username'];
$password=$_POST['password'];
   				 if(move_uploaded_file($_FILES['photo']['tmp_name'],$profilephoto))
   {						  
	$insertloginQuery = "insert into mstr_login(username,password,type,last_logindatetime) 
	                                   values ('".$username."','".$password."','Admin', now())";
   
	$insertQuery = "insert into admin(username,first_name,last_name,profile_photo)
											values('".$username."','".$firstname."','".$lastname."','".$profilephoto."')";
   
  if((mysql_query($insertloginQuery)) && (mysql_query($insertQuery))) 
      {	  
		header("location:admin.php?msg=Administrator added successfully");
	   }
	else
	{
		header("location:admin.php?msg=Admin not added");
	}	
		   }
    
?>
