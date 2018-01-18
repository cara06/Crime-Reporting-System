<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];


$selectLoginQuery = "select * from mstr_login where username = '".$username."' and password = '".$password."' ";
 
$rs = mysql_query($selectLoginQuery) or die(mysql_error());
$c=mysql_num_rows($rs);
$row = mysql_fetch_array($rs);
if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row[type];	
	header("location:home.php?msg=Logged in Successfully!");
}
else
{
	header("location:login.php?msg=Sorry!...Invalid User");
}
?>