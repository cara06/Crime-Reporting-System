<?php
include("config.php");

$username = $_GET['loginname'];
$deleteUserQuery = "delete from mstr_login where username = '".$username."'";

if(mysql_query($deleteUserQuery))
{
	
	header("location:viewadmin.php?msg=Deleted Successfully!");
}
else
{
	header("location:viewadmin.php?msg=Error in deleting record");
}
?>