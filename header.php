
<html>
  <head>
    <title>THE NIGERIAN POLICE FORCE </title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.minn.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  </head>
  <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
      <div id="container"> 
            <div class="header">
                <img style="margin:0px 0px 0px 0px;float:left;" width="140" height="120"src="images/logo.png" alt="Police logo"/>
                <img style="margin:0px 0px 0px 0px;float:right;" src="images/cort.jpg" width="117" height="117" alt="Nigerian Logo"/>
                <h3 class="headtext"> &nbsp;<b>THE NIGERIAN POLICE FORCE</b> </h3>
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-family:elephant;"><i>...KEFFI DISTRICT</i></h5>
             <hr /></div>
			   <ul id="saturday">
				    <?php
	   if($_SESSION['type'] == "Admin")
	   {?>
   <li><a href="home.php"><span>Main Home</span></a></li>
  <li><a href="viewpolice.php"><span>Stations</span></a></li>
  <li><a href="viewcrimetype.php"><span>Manage Crime</span></a></li>
  <li><a href="viewofficer.php"><span>Officers</span></a></li>
  <li><a href="viewarea.php"><span>View Areas</span></a></li>
  <li><a href="viewadmin.php"><span>Manage Admin</span></a></li>
  <li><a href="viewdesignation.php"><span>Ranks</span></a></li>
  <li><a href="logout.php"><span>Logout</span></a></li>
					<?php }?>
	
	   <?php 
	      if($_SESSION['type'] == "Police Officer")
	      {?>
<li><a href="home.php" ><span>Main Home</span></a></li>
  <li><a href="viewfir.php"><span>View Reports</span></a></li>
  <li><a href="viewinbox.php"><span>View Inbox</span></a></li>
  <li><a href="logout.php"><span>Logout</span></a></li>
					<?php }?>      
	
	<?php 
	      if($_SESSION['type'] == "user")
	      {?>
					<li><a href="home.php"><span>Home</span></a></li>
  <li><a href="instr.php"><span>Report Crime</span></a></li>
  <li><a href="missing_citizen.php"><span>Report Missing Persons</span></a></li>
  <li><a href="profile.php"><span>View Profile</span></a></li>
    <li><a href="crimealert.php"><span>E-mail Alert</span></a></li>
  <li><a href="logout.php"><span>Logout</span></a></li>
						<?php }?>  
                    </ul>
			