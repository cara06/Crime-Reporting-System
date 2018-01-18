<?php
session_start ();
include("config.php");
include "header.php"
?>
<div id="site_content">		
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
          <h2>  <marquee alt="up">Latest News</marquee></h2>
     <p>  <a href="#" title="NEWS" style="color:#708090" text-decoration="none";>Police Commissioner visits Imo state </a></p>			
       <p><a href="#" title="NEWS" style=color:#708090>Herdsmen invade a village in Bukuru</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>President Buhari sacks His speech writer</a></p> 
	 <p><a href="#" title="NEWS" style=color:#708090>Breaking: Five Boko Haram members killed</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>"Touch Patience Jonathan and see"- Niger Delta Militants</a></p> 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>FAQs</h2>
            <p><a href="econtact" title="Emergency" style=color:#708090 text-decoration:none;>Emergency Numbers? <br></a>
			 <p><a href="#" title="How to" style=color:#708090 text-decoration:none;> How to report crime? <br>
			  <p><a href="#" title="Police Recruitment" style=color:#708090 text-decoration:none;>Police Recruitment?</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="700" height="350" src="images/b2.jpeg" alt="&quot;The Police commissioner&quot;" /></li>
		  <li><img width="700" height="350" src="images/p7.png" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/p4.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/p1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/p2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/p3.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul>
      </div>	
<div class="detail">						
		<table width="96%" cellpadding="0" cellspacing="0" >
		<tr>
		<td width="650" height="89" >
		<h2>Welcome, <?php echo ($_SESSION['username']); 
		?>... <?php echo ($_SESSION['type'])?></h2>
		 <p><?php //echo base64_decode($_GET[msg]);?>
		 </tr>
		</table>
        </div>	  
	</div><!--close site_content--> 
 <?php include("footer.php");?>
</div><!--close container-->
  </body>
</html>