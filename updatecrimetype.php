<?php
include("config.php");
$crimetype = $_POST['crimetype'];
$oldcrimedesc = $_POST['oldcrimedesc'];

$newcrimetype = $_POST['newcrimetype'];
$newcrimedesc = $_POST['newcrimedesc'];

$updateQuery = "update mstr_crimetype set crime_type = '".$newcrimetype."' and description = '".$newcrimedesc."' 
                  where crime_type = '".$crimetype."' and description = '".$oldcrimedesc."' ";

if(mysql_query($updateQuery))
{	

	header("location:viewcrimetype.php?msg=Updated Successfully");
}
else
{

	header("location:editcrimetype.php?msg=Not Updated");
}
?>
