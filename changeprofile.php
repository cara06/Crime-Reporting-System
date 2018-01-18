<?php 
include("header.php");
include("config.php");

?>
<div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Update My Profile</th>
            </tr>
        <form action="chkregistration.php" method="post"  enctype="multipart/form-data" name="form1">            
           <p>&nbsp;</p>
           <table width="565" border="0" align="center" cellpadding="10" cellspacing="20">
        
               <tr align="top">
                 <td border="2"><b style="color:#000058;">First Name:</td>
                <td><input type="text" value="<?php //echo $record["first_name"]; ?>" 
			       name="fname" id="fname" />
               </td>
             </tr>
             <tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td>
                <input type="text" value="<?php echo $record["middle_name"]; ?>" 
			       name="mname" id="mname" />
           </td>
             </tr>
              <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td>
                 <input type="text" value="<?php echo $record["last_name"]; ?>" 
			       name="lname" id="lname" />
                 </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Birth Date:</td><td>
                 <input type="text"  value="<?php echo $record["Dob"]; ?>" 
			       name="bdate" id="bdate" />
              </td>
             </tr>
            <tr>
        <td border="2"><b style="color:#000058;">Gender:</td><td><input type="radio" name="gender" value="Male">Male</td>            
                 <td><input type="radio" name="gender" value="Female">Female</td>
              </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Address:</td><td>
                 <TEXTAREA ROWS="3" COLS="28" name="address" id="address" style="background-color: #EEEEEE"><?php echo $record["address"]; ?></TEXTAREA>
                </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">State:</td>
		<td>
               <select name="city" size="1"  id="city" >
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>"><?php echo $rowCity['city_name']?></option>
                  		<?php }?>
                 </select>
			   </span></td>
             </tr>
             
             	<tr>
        <td border="2"><b style="color:#000058;">Pin code:</td><td>             
                  <input type="text" maxlength="6" value="<?php echo $record["pincode"]; ?>" 
			       name="pincode" id="pincode" />				 
				                 </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Contact No:</td><td>
                  <input type="text" maxlength="12" value="<?php echo $record["contact_no"]; ?>" 
			       name="contactno" id="contactno" /></td>
             </tr>
             <tr bgcolor="#993366">
               <tr>
        <td border="2"><b style="color:#000058;">E-mail ID:</td>
                 <td>
                <input type="text" value="<?php echo $record["emailid"]; ?>" name="emailid"  maxlength="254"/>
              
             </td>
             </tr>
                         <tr>
        <td border="2"><b style="color:#000058;">Recent photo:</td>
               <td><input type="text" value="<?php echo $record["profile_photo"]; ?>" name="photo" 
			   size="40"/>
                 </td>
             </tr>
           </table>
		  <p>&nbsp;</p>
		                
           <p>&nbsp;</p>            
           
           <table width="565" align="center" cellpadding="10" cellspacing="20">
		   <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Login Form</th>
            </tr> 
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Choose login name:</span>
               <td width="379" align="left" bgcolor="#FFFFFF"><span class="style15">
                 <label>
                 <input type="text" value="<?php echo $record["username"]; ?>" 
			       name="loginname" id="loginname" />
				
             </td>
             </tr>
			  <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">
                   <input type="text" size="24" value="<?php echo $record["password"]; ?>" 
			       name="password" id="password" />
				</td>
             </tr>
			 <tr bgcolor="#993366">
               <td height="39" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Re-Type Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">              
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				</td>
             </tr>
			 <tr align="right" valign="middle" bgcolor="#FFFFFF">
			    <input name="Submit" type="submit" class="header-button"  value="" /></td>
			 </tr>		   
		   </table>		   
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
        </form> 
	   </div>
       <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>
     
</body></html>