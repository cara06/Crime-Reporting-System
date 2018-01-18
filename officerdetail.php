<?php
session_start();
include("config.php");
include("header.php");?>

    	<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Enter Officer's Information</th>
            </tr>
         <form action="chkOfficerdetail.php" method="post" enctype="multipart/form-data" name="form1">
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">First Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="fname" type="text" id="fname" size="35" />
                    </span></td>
                  </tr>
				  <tr>
	<td height="5" colspan="6" ></td>
</tr>

                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Middle Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="mname" type="text" id="mname" size="35" />
                    
                      </label>
                    </span></td>
                  </tr>
				   <tr>
	<td height="5" colspan="6" ></td>
</tr>
                  <tr>
                    <td height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="lname" type="text" id="lname" size="35" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:"Invalid Lastname"});
				 </script>
                      </label>
                    </span></td>
                  </tr>
				   <tr>
	<td height="2" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="radio" name="gender" value="Male" />
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" />
                        Female</label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>
                      </label>
                    </span><span class="style15 style3">
                    <textarea name="address" cols="32" rows="3"  id="address"></textarea>
                    </span></td>
                  </tr>
				   <tr>
	<td height="5" colspan="6" ></td>
</tr>
                   <tr bgcolor="#993366">
                     <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">District</span>:</td>
                     <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                       <select name="city" size="1"  id="city" >
                         <option>----select----</option>
						 <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                         <option value="<?php echo $rowCity['city_id']?>"> <?php echo $rowCity['city_name']?></option>
                         <?php }?>
                       </select>
                     </span></td>
                   </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Pin-code:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="pincode" type="text" id="pincode" maxlength="6" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>
                    </span></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="text" name="contactno" id="contactno" maxlength="12" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                      </label>
                    </span></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
                        <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>                    </td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Joining Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="jdate" id="jdate" /></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ldate" id="ldate" /></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Police station name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="psname" size="1"  id="psname"  >
                        <option>--------------select------------</option>
						<?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysql_query($psQuery);
						  while($rowPs = mysql_fetch_array($rsPs))
						  {
						  ?>
                        <option value="<?php echo $rowPs['poilcestation_id']?>"> 
						<?php echo $rowPs['policestation_name']?></option>
                        <?php }?>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Designation Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="designation" size="1"  id="designation" >
                        <option>----select----</option>
						<?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysql_query($desigQuery);
						  while($rowDesig = mysql_fetch_array($rsDesig))
						  {
						  ?>
                        <option value="<?php echo $rowDesig['desi_id']?>"> <?php echo $rowDesig['desi_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                </table>
                
                	<div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Login Details</th>
            </tr>
        <form action="chkregistration.php" method="post"  enctype="multipart/form-data" name="form1">
                  <tr bgcolor="#993366">
                    <td width="173" height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Choose login name:</span> </td>
                    <td width="458" align="left" bgcolor="#FFFFFF"><span class="style15">
                      <label>
                      <input name="loginname"  id="loginname" type="text" size="24" />
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="password"  type="password" id="password" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="30" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Re-Type Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="rpassword"  type="password" id="rpassword" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>
                    </span></td>
                  </tr>
                  <tr align="left" valign="middle" bgcolor="#FFFFFF">
                    <td height="28" colspan="2"><input name="reset2" type="reset" value="Reset" />
                     <input name="Submit" type="submit"  value="Submit" /></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </form>
            </div>
          </div>
     <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
      </div>
</p>
    
</body></html>