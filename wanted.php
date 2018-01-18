<?php 
include("config.php");
?>
<html>
  <head>
    <title>THE NIGERIAN POLICE FORCE </title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
      <div id="container"> 
            <div class="header">
                <img style="margin:0px 0px 0px 0px;float:left;" width="140" height="120"src="images/logo.png" alt="Police logo"/>
                <img style="margin:0px 0px 0px 0px;float:right;" src="images/cort.jpg" width="117" height="117" alt="Nigerian Logo"/>
                <h3 class="headtext"> &nbsp;<b>THE NIGERIAN POLICE FORCE</b> </h3>
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-face:Cataneo BT"><i>...Crime Reporting System</i></h5>
             <hr /></div>
			   <ul id="saturday">
             <li><a href="index.php" ><span>Home</span></a></li>
			 <li><a href="login.php"><span>Login</span></a></li>
  <li><a href="registration.php" ><span>Register</span></a></li>
  <li><a href="viewmissing_citizen.php" ><span>Missing Persons</span></a></li>
  <li><a href="wanted.php" class="current"><span>Wanted Persons</span></a></li>
  <li><a href="aboutus.php"><span>About</span></a></li>
  <li><a href="econtact.php"><span>Emergency Contact</span></a></li>
                    </ul>
		<div id="page">
		 <table width="50%"  align="center">
		 <tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">WANTED!!!</th>
            </tr>
			</table>
			<div id="contents">
		<div class="clearfix">
		
			<div class="main">
				<p color="#000">
					These people are wanted by the Nigerian Police Force. Any valid information on these people should be reported immediately. Call 911 or send us an email.
					
				</p>
				<ul class="practices">
				<li class="frame5">
						<a href="#" class="box"><img src="images/b3.jpg" height="158" width="158"><span>Mercy</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/m1.jpg" height="158" width="158"><span>John</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/m3.jpg" height="158" width="158"><span>Michael</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/m2.jpg" height="158" width="158"><span>Mercy</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/b3.jpg" height="158" width="158"><span>John</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/baby.jpg" height="158" width="158"><span>Michael</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/baby.jpg" height="158" width="158"><span>David</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<?php include("footer.php");?>
</div>