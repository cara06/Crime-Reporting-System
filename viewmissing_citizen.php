<?php
include("config.php");
?>
<!DOCTYPE HTML>
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
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-face:Cataneo BT"><i>...KEFFI DISTRICT</i></h5>
             <hr /></div>
			   <ul id="saturday">
             <li><a href="index.php" ><span>Home</span></a></li>
			 <li><a href="login.php"><span>Login</span></a></li>
  <li><a href="registration.php" ><span>Register</span></a></li>
  <li><a href="viewmissing_citizen.php" class="current"><span>Missing Persons</span></a></li>
  <li><a href="wanted.php"><span>Wanted Persons</span></a></li>
  <li><a href="aboutus.php"><span>About</span></a></li>
  <li><a href="econtact.php"><span>Emergency Contact</span></a></li>
                    </ul>
		<div id="page">
		 <table width="50%"  align="center">
		 <tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Missing Citizens</th>
            </tr>
			</table>
			<div id="contents">
		<div class="clearfix">
			<div class="main">
					<p>These are the various missing persons.
					Please report to us directly if you have any useful information that will help us in knowing the whereabouts of these persons.</p>
				<ul class="practices">
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="images/nn.jpg" height="155" width="175"><span> Mercy John
						</span></a>
					</li>
					
				</ul>
			</div>
			
			</div>
			<p>	<a href="missing_citizen.php" title="Report missing person"><input name="missing"  type="button"  value="Click to report any missing person >" /></a></p>
			</div>
			</div>
			<?php include("footer.php");?>
		</div>
	
	
</body>
</html>