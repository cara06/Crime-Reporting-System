<?php 
include("sessionhandler.php");
include("config.php");
include("header.php");
$selectQuery = "select * from mstr_profile  where username = '".$_SESSION['username']."' ";

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewprofile.php");
?>
	<div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">My Profile Information</th>
            </tr>
        <form action="updateprofile.php" method="post"  enctype="multipart/form-data" name="">  
		  <tr align="top">
		<td width="115" rowspan="1" align="top" valign="top" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["profile_photo"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" rel="facebox">
				   Change Photo</a> <td> </tr>
		    <tr align="top">
                 <td border="2"><b style="color:#000058;">First Name:</td><td><input type="text" name="fname"value="<?php echo $record["first_name"]; ?>" ></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><input type="text" name="mname"value="<?php echo $record["middle_name"]; ?>" ></td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><input type="text" name="lname"value="<?php echo $record["last_name"]; ?>" ></td>
    </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Birth Date:</td><td><input type="text" name="bdate" ></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Gender:</td><td><input type="radio" name="gender" value="Male">Male         
                 <input type="radio" name="gender" value="Female">Female</td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Address:</td><td><textarea name="address" cols="32" rows="5"  id="address"value="<?php echo $record["address"]; ?>" ></textarea> </td>
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
        <td border="2"><b style="color:#000058;">Pin code:</td><td><input type="text" name="pincode"value="<?php echo $record["pincode"]; ?>" ></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Contact No:</td><td><input type="text" name="contactno"value="<?php echo $record["contact_no"]; ?>" ></td>
    </tr><tr>
        <td border="2"><b style="color:#000058;">E-mail ID:</td><td><input type="text" name="emailid"value="<?php echo $record["emailid"]; ?>" ></td>
    </tr>
		 <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Login Form</th>
            </tr>             
            
                <tr>
        <td border="2"><b style="color:#000058;">Login name:</td><td><input type="text" name="loginname" id="loginname"value="<?php echo $record["username"]; ?>" ></td>
				 <td><script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				 </script> </td>
             </tr>
			  <tr>
        <td border="2"><b style="color:#000058;">Old Password:</td><td><input type="password" name="password" id="password"value="<?php echo $record["password"]; ?>" ></td>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
             </tr>
			 <tr>
        <td border="2"><b style="color:#000058;">New Password:</td><td><input type="text" size="24"
			       name="password2" id="password2" /></td>
				             
             </tr>
			  <tr>
        <td border="2"><b style="color:#000058;">Confirm Password:</td><td><input type="password" name="rpassword" id="rpassword"></td>
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
             </tr>
			 <tr>
			  <td colspan="2"><td><input name="Submit" type="submit" class="header-button"  value="Update" /></td></td>
			 </tr>		   
		   </table>		   
        </form> 
	   </div>
 <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>
</body></html>