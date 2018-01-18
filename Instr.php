<?php
session_start();
include("config.php");
include("header.php");
if(!$_SESSION['type']=="user")
	header("location:login.php?msg=You are not a Registered User!"); 
?>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<div id="site_content">  
	
      <div id="text_content">
        <h2>Welcome to the Online Crime Reporting System for Keffi Police Force</h2>
        <p>You can use the system to make an immediate report of a crime in which you are the victim or a witness.</p>    
			 <h2>IF THIS IS AN EMERGENCY OR THE CRIME IS IN PROGRESS, PLEASE CALL 222 OR CLICK <a href="econtact.php"><input name="Fir"  type="button"  value="Here" /> HERE</a></h2>
<p>
	WARNING!!! 
Filing a false police report is a crime!<br>

It is required that you understand that filing a false police report is a crime if you would like to submit a police report online.<br>

Did the incident occur within Keffi limits? If the incident did not occur within Keffi limits, you should contact the district where the incident occurred instead of submitting a police report online with the station in Keffi.<br>

Are you eighteen (18) years of age or older? If you are under the age of eighteen (18) years of age, you cannot submit a police report online. Please have a parent or guardian submit the police report for you.<br>

Do you have an email address? (A valid return email address is required in order to file an online report.) A valid return email address is required in order to submit a police report online so that we can email you your temporary police report number and a copy of the police report to keep for your records.

			<p>	<a href="FIRreg1.php" title="Report a crime"><input name="Fir"  type="button"  value="Proceed to Online Crime Reporting >>>" /></a></p>
        </div>
		<div class="static_image">
<img width="400" height="200" src="images/stop3.jpg" alt="our work" />
<img width="400" height="300" src="images/stop1.jpg" alt="our work" />
	  </div>
	
      </div><!--close site_content-->	
	    <?php include("footer.php");?>