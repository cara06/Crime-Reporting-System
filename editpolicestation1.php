<?php 
include("sessionHandler.php");
include("config.php");
include("header.php");
$pstationname = $_GET['psname'];
$selectQuery = "select *from mstr_policestation where policestation_name= '".$pstationname."' ";
$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
?>
<div id="page">
     <table width="50%"  align="center">
	 <tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;;" height="29">Edit Information of Police Station: </th>
            </tr></table>
   <form action="chkPolicestationdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <table width="770" height="370" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="psname" type="text" id="psname" size="35"  value="<?php echo $record["policestation_name"]; ?>"/>
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
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="city" size="1"  id="city" >
                        <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                        <option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>> <?php echo $rowCity['city_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('city');
				          f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Area Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="area" size="1"  id="area" >
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>" <?php if($record["area_id"]==$rowArea['area_id']) echo "selected"; ?>> <?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="75" align="right" valign="middle" bgcolor="#FFFFFF">
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
					  <textarea name="address" cols="32" rows="3"  id="address"><?php echo $record["address"]; ?></textarea>
					  </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="26" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" value="<?php echo $record["Email_id"]; ?>" />
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> 
					<span class="style19" style="color: #000000">Contact number: </span></span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>" />
					<script type="text/javascript">
				       var f1 = new LiveValidation('contactno');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script>					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Contact Person:</span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input name="contactperson" type="text" id="contactperson" size="35" value="<?php echo $record["contact_person"]; ?>" />
					<script type="text/javascript">
				    var f1 = new LiveValidation('contactperson');
				    f1.add(Validate.Presence,{failureMessage: " Please enter contact person name"});
				  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   //failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid contact person names"});
				 </script>					</td>
                  </tr>
				  <tr> 
			   <td><input name="reset" type="reset"  value="Reset" />
                <input name="update"  type="submit" id="update" value="Update"/></td>
				</tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </form>
            <?php include("footer.php");?>
               </div>

</body></html>