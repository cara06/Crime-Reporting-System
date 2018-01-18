
	<?php
	include ("sessionHandler.php");?>
	<div class="menubar">
	  <?php
	  if(!$_SESSION['type'] == "admin");
	   {?>
			<ul> <li class="item2"><a href="viewarea.php"><span>View Area</span></a></li>
			 <li class="item2"><a href="viewcity.php"><span>View City</span></a></li>
			 <li class="item2"><a href="viewdesignation.php"><span>View Designation</span></a></li>
			 <li class="item2"><a href="viewcrimetype.php"><span>Crime Types </span></a></li>
			 <li class="item2"><a href="viewpolice.php"><span>Police Station Details </span></a></li>
			 <li class="item59"><a href="viewofficer.php">Officer Details</a></li>
			 </ul>
			 		<?php }?>
	
	   <?php 
	      if(!$_SESSION['type'] == "Police Officer");
	      {?>
		  <ul>
		  <li class="item63"><a href="viewfir.php"><span>View crime report </span></a></li>
		  <li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li>
		  <li class="item63"><a href="logout.php"><span>Logout</span></a></li>
	          </ul>
	    
		<?php }?>      
	
	<?php 
	      if(!$_SESSION['type'] == "user");
	      {?>
		  
		  <li class="item63"><a href="FIRreg1.php"><span>Report a crime  </span></a></li>
		  <li class="item63"><a href="editFIRdetail.php"><span>Edit Your crime report </span></a></li>
		  <li class="item63"><a href="viewmissing_citizen.php"><span>Missing Citizens </span></a></li> 
		  <li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li> 
	     
		<?php }?>
	
	</ul>
	</div>
    
	