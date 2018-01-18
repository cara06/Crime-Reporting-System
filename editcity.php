<?php 
ob_start();
include("config.php");
//include("sidebar.php");
$cityname = $_GET['cityname'];

$selectQuery = "select *from mstr_city where city_name = '".$cityname."' ";
$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
	//header("location:viewcity.php");
?>
	<!DOCTYPE HTML>
<html>
  <head>
    <title>THE NIGERIAN POLICE FORCE </title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <?php

       
      ?>
  <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
      <div id="container"> 
            <div class="header">
                <img style="margin:0px 0px 0px 0px;float:left;" width="140" height="120"src="images/logo.png" alt="Police logo"/>
                <img style="margin:0px 0px 0px 0px;float:right;" src="images/cort.jpg" width="117" height="117" alt="Nigerian Logo"/>
                <h3 class="headtext"> &nbsp;<b>THE NIGERIAN POLICE FORCE</b> </h3>
                <h5 style="color:green;text-align:right;margin:0 0px 0px 0px; font-size:26px; font-face:Cataneo BT"><i>...Crime Reporting System</i></h5>
             <hr></div>
            <div class="menubar">
                   <ul id="navigation">
                    <li><a href="index.php" title="Home page">Home</a></li>
                    <li><a href="registration.php" title="Register">Register</a></li>
                    <li><a href="viewmissing_citizen.php" title="Missing persons">Missing Persons</a></li>
                    <li><a href="FIRreg1.php" title="Report a crime">Report Crime</a></li>
					<li><a href="index.php?see=offences" title="Departments">Departments</a></li>
					<li><a href="" title="Wanted">Wanted Criminals</a></li>
                    <li><a href="econtact.php" title="Contact us">Contact Us</a></li>
					<li><a href="aboutus.php" title="Contact us">About Us</a></li>
                    </ul>
            </div>
<div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Edit City </th>
            </tr>

<form name="editcity" action="updatecity.php" method="post">
<table width="67%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="6" height="36" align="left" valign="middle" >&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> <span class="highlight">Edit City Name </span></td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="35">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old City Name</span>:</td>
	<td width="23%" ><input  readonly="yes" type="text" id="city" name="city" value="<?php echo $record["city_name"]; ?>"/>		
			</td>
	<td width="45%"><font color="#FF0000"></font></td>
</tr>
<tr>
	<td width="1%" height="34">&nbsp;</td>
  	<td width="27%" class="formField">New City Name: </td>
	<td width="23%" >
	<input type="text" id="newcityname" name="newcityname" />
	</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset"  id="reset" value="Reset"/>
	<input name="update" type="submit"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="207" colspan="4"></td>
</tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
</form>	

	<div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>

</body>
</html>