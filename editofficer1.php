<?php 
include("sessionHandler.php");
include("header.php");
      include("config.php");
$username = $_GET['username'];
$selectQuery = "select *from mstr_officer mo,mstr_profile mp where mp.username = '".$username."' and mp.username = mo.username ";
//echo $selectQuery;

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	//header("location:viewofficer.php");

?>
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Officer's Information </th>
            </tr>
   <form action="chkPolicestationdetail.php" method="post">
                <table width="770" height="563" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span>First Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF">
                      <input name="fname" type="text" id="fname" size="35" value="<?php echo $record["first_name"]; ?>" />
                      </td>
                  </tr>

                  <tr bgcolor="#993366">
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Middle Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF">
                      <label>
                      <input name="mname" type="text" id="mname" size="35"  value="<?php echo $record["middle_name"]; ?>"/>
                      </label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="lname" type="text" id="lname" size="35" value="<?php echo $record["last_name"]; ?>" />
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span style="color: #000000">Gender:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span >
                      <label>
                      <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>/>
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>/>
                        Female</label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      </label>
                    </span><span class="style15 style3">
                      <textarea name="address" cols="32" rows="3"  id="address"><?php echo $record["address"]; ?></textarea>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
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
                       
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Pin-code:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="pincode" type="text" id="pincode" maxlength="6"  value="<?php echo $record["pincode"]; ?>"/>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>" />
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="emailid" type="text" id="emailid" size="35" maxlength="254" value="<?php echo $record["emailid"]; ?>" />
                     </td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF">Joining Date: </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="jdate" id="jdate"  value="<?php echo $record["Jdate"]; ?>"/></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="24" align="right" valign="middle" bgcolor="#FFFFFF">Last Date: </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ldate" id="ldate"  value="<?php echo $record["Ldate"]; ?>"/></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF">Police station name: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="psname" size="1"  id="psname" >
                        <?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysql_query($psQuery);
						  while($rowPs = mysql_fetch_array($rsPs))
						  {
						  ?>
                 <option value="<?php echo $rowPs['policestation_id']?>"<?php if($record["poilcestation_id"]==$rowPs['poilcestation_id']) echo "selected"; ?>> 
				 <?php echo $rowPs['policestation_name']?></option>
                 <?php }?>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Designation Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="designation" size="1"  id="designation" >
                        <?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysql_query($desigQuery);
						  while($rowDesig = mysql_fetch_array($rsDesig))
						  {
						  ?>
                   <option value="<?php echo $rowDesig['desi_id']?>"<?php if($record["desi_id"]==$rowDesig['desi_id']) echo "selected"; ?>>  
				   <?php echo $rowDesig['desi_name']?></option>
                   <?php }?>
                      </select>
                    </span></td>
                  </tr><tr><td>
				     <input name="reset" type="reset" value="Reset" />
                <input name="update"  type="submit" id="update" value="Update"/></td></tr>
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