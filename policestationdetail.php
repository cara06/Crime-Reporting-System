<?php 
include("sessionHandler.php");
include("config.php");
include("header.php");
 ?>
 <div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Add Police station: </th>
            </tr>
			</table>
   <form action="chkPolicestationdetail.php" method="post" enctype="multipart/form-data" name="form1">
          
                <p>&nbsp;</p>
                <table width="770" height="433" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" height="25" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="psname" type="text" id="psname" size="35" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('psname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid Firstname"});
					 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="21" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Starting Date:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="sdate" id="sdate" /></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">District:</span></td>
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
                        <script type="text/javascript">
				          var f1 = new LiveValidation('city');
				          f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Area Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="area" size="1"  id="area" >
					    <option>----select----</option>  
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>"> 
						<?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="79" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> Address:</span> </td>
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
                  <tr bgcolor="#993366">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Pin-code:</span></td>
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
                  <tr bgcolor="#999999">
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="contactno" id="contactno" maxlength="12" /></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact Person:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="contactperson" type="text" id="contactperson" size="35" />
                    <script type="text/javascript">
				       var f1 = new LiveValidation('contactno');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script>					</td>
                  </tr>

                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                    <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <input name="reset" type="reset" class="header-button" value="Reset" />
                <input name="next"  type="submit" class="header-button" id="next" value="Submit"/>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
   </form>
            </div>
          
    <?php include("footer.php");?>
      </div>
</div>
</p>
    

</body></html>