<?php ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
	<link rel="stylesheet" href="css/login.css">
  </head>
  <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
      <div id="container"> 
            <div class="header">
                <img style="margin:0px 0px 0px 0px;float:left;" width="140" height="120"src="images/logo.png" alt="Police logo"/>
                <img style="margin:0px 0px 0px 0px;float:right;" src="images/cort.jpg" width="120" height="117" alt="Nigerian Logo"/>
                <h3 class="headtext"> &nbsp;<b>THE NIGERIAN POLICE FORCE</b> </h3>
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-face:Cataneo BT"><i>...Crime Reporting System</i></h5>
             <hr /></div>
			   <ul id="saturday">
             <li><a href="index.php" ><span>Home</span></a></li>
			  <li><a href="login.php" class="current"><span>Login</span></a></li>
  <li><a href="registration.php"><span>Register</span></a></li>
  <li><a href="viewmissing_citizen.php"><span>Missing Persons</span></a></li>
  <li><a href="wanted.php"><span>Wanted Persons</span></a></li>
  <li><a href="aboutus.php"><span>About</span></a></li>
  <li><a href="econtact.php"><span>Emergency Contacts</span></a></li>
                    </ul>
			<div id="page">
    <div class="login-card">
    <h1>Login</h1><br>
  <form action="checkLogin.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
    
  <div class="login-help">
    Not a user yet?  <a href="registration.php">Register</a>
  </div>
</div>
</div>
  <?php include("footer.php");?>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script> 
  </body>
</html>
