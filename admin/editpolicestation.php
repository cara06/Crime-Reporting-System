<?php 
include("header.php");
include("config.php");
$selectQuery = "select *from mstr_policestation where policestation_id = '".$policestation_id."' ";
$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewpolice.php");

?>
<body>
<h1>Police Information</h1>
<form name="frmofficer" action="updatepolicestation.php" method="post">
<table>
 <tr>
          <th colspan="3" class="first"><strong>Police Station Information</strong></th>
        </tr>		

<tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input type="text" value="<? echo $record["policestation_name"]; ?>" name="pname" />
                      
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Area Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="area" size="1"  id="area" >
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>"> 
						<?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> Address:</span> </td>
                    <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <TEXTAREA ROWS="5" COLS="30" name="address" id="address" style="background-color: #EEEEEE"><? echo $record["address"]; ?></TEXTAREA>
                      
                      </label>
                    </span></td>
                    <td width="74" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">City:</span></td>
                    <td width="296" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="city" size="1"  id="city" >
                        <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                        <option value="<?php echo $rowCity['city_id']?>">
						<?php echo $rowCity['city_name']?></option>
                        <?php }?>
                        
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Pin-code:</span></td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                     <input type="text" value="<? echo $record["pincode"]; ?>" name="pincode" maxlength="6" />	 
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                       <input type="text" value="<? echo $record["Email_id"]; ?>" name="emailid"  maxlength="254"/>
			                                  
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000"> 
					<span class="style19" style="color: #000000">Contact number: </span></span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["contact_no"]; ?>" name="contactno" maxlength="12" />
					
					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">Contact Person:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["contact_person"]; ?>" name="contactperson" />
					
					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">
					<span class="style19" style="color: #000000">Starting Date:</span></span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<? echo $record["starting_date"]; ?>" name="sdate" /></td>
    </tr>
	 <tr><td><input type="submit" value="Update"  /></td>
        </tr>
	</table>
	</form>	
	   
</body>
</html>