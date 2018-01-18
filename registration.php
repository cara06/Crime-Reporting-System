<?php 
include ("config.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="frsc.css"/>
	<link rel="stylesheet" href="css/login.css">
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
  <li><a href="registration.php" class="current"><span>Register</span></a></li>
  <li><a href="viewmissing_citizen.php"><span>Missing Persons</span></a></li>
  <li><a href="wanted.php"><span>Wanted Persons</span></a></li>
  <li><a href="aboutus.php"><span>About</span></a></li>
  <li><a href="econtact.php"><span>Emergency Contacts</span></a></li>
                    </ul>
	<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Registration Form</th>
            </tr>
        <form action="chkregistration.php" method="post"  enctype="multipart/form-data" name="form1">
		    <tr >
                 <td border="2"><b style="color:#000058;">First Name:</td><td><input type="text" name="fname"/></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><input type="text" name="mname"/></td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><input type="text" name="lname"/></td>
    </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Birth Date:</td><td><input type="text" name="bdate"/></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Gender:</td><td><input type="radio" name="gender" value="Male"/>Male       
                 <input type="radio" name="gender" value="Female"/>Female</td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Address:</td><td><textarea name="address" cols="32" rows="5"  id="address"></textarea> </td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">District:</td>
		<td><select name="city" size="1"  id="city" >
			   <option>-----select-----</option>
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>"><?php echo $rowCity['city_name']?></option>
                  		<?php }?> 
                 </select></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Pin code:</td><td><input type="text" name="pincode"></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Contact No:</td><td><input type="text" name="contactno"></td>
    </tr><tr>
        <td border="2"><b style="color:#000058;">E-mail ID:</td><td><input type="text" name="emailid"></td>
    </tr>
            <tr>
        <td border="2"><b style="color:#000058;">Recent photo:</td><td> <input name="photo" type="file" id="photo" onclick=""  size="40"></td>
    </tr>
		
		 <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Login Form</th>
            </tr>             
                <tr>
        <td border="2"><b style="color:#000058;">Login name:</td><td><input type="text" name="loginname" id="loginname"></td>
				 <td><script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				 </script> </td>
             </tr>
			  <tr>
        <td border="2"><b style="color:#000058;">Password:</td><td><input type="password" name="password" id="password"></td>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
             </tr>
			  <tr>
        <td border="2"><b style="color:#000058;">Re-type password:</td><td><input type="password" name="rpassword" id="rpassword"></td>
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
             </tr>
			 <tr>
			  <td colspan="2"><input name="reset" type="reset" class="header-button" value="Reset" />
			    <input name="Submit" type="submit" class="header-button"  value="Submit" /></td>
			 </tr>	
</table>			 
  </form>		
	   </div>
 <?php include("footer.php");?>
</div>
