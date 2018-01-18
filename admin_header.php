<?php 
ob_start();
include("sessionHandler.php");
include("config.php");
if(!$_SESSION['type']=="Admin")
	header("location:login.php?msg=You are not logged in as Admin!"); ?>
<html>
  <head>
    <title>THE NIGERIAN POLICE FORCE </title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
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
					<li><a href="admin_home.php" title="Home page">Main Home</a></li>
                    <li><a href="policestationdetail.php">Add Station </a></li>
					 <li><a href="viewpolice.php" >View Stations</a></li>
					 <li><a href="crimetype.php">Add CrimeType</a></li>
                    <li><a href="area.php">Add LGA</a></li>
					<li><a href="city.php">Add State</a></li>
					<li><a href="officerdetail.php">Add Officer</a></li>
					<li><a href="designation.php" title="Designation">Add Designation</a></li>
					<li><a href="logout.php">Logout</a></li>
                    </ul>
            </div>