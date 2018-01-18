<?php include("header.php"); ?>
            <div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Edit your FIR details:</th>
            </tr>
              <form action="chkFIRstatus.php" method="post">
                <table width="50%"  align="center">
                   <tr align="top">
                 <td border="2"><b style="color:#000058;">Name:</td><td><input type="text" name="name" id="name" ></td></tr>
				 <tr>
				 <td border="2"><b style="color:#000058;">Suspect Name:</td><td><input type="text" name="suspectname" id="suspectname" ></td>
            </tr>
                  <tr align="top">
                 <td border="2"><b style="color:#000058;">Victim Name:</td><td><input type="text" name="victimname" id="victimname" ></td>
            </tr>
                  <tr bgcolor="#993366">
                    <tr>
        <td border="2"><b style="color:#000058;">Date of Crime:</td><td><input type="text" name="date" id="date"></td></tr>
		<tr>
		<td border="2"><b style="color:#000058;">Time of Crime:</td><td><input type="text" name="time2" id="time2"></td>
                   </tr>
                  <tr>
        <td border="2"><b style="color:#000058;">Gender:</td>
		         <td><input type="radio" name="gender" value="Male"/>Male           
                 <input type="radio" name="gender" value="Female"/>Female</td>
    </tr>
                  <tr>
                 
        <td border="2"><b style="color:#000058;"> Your Address:</td><td><textarea name="address" cols="28" rows="3"  id="address"></textarea> </td></tr>
                   <tr> <td border="2"><b style="color:#000058;">City:</td>
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
        <td border="2"><b style="color:#000058;">Contact No:</td><td><input type="text" name="contactno"></td></tr>
        <tr>
		<td border="2"><b style="color:#000058;">E-mail ID:</td><td><input type="text" name="emailid"></td>
    </tr>
                  <tr><td border="2"><b style="color:#000058;"> Crime Location Address:</td><td><textarea name="crimelocation" cols="28" rows="3"  id="crimelocation"></textarea> </td>
    </tr>
                  <tr><td border="2"><b style="color:#000058;">Choose ID-Proof:</td>
		<td>               
                 <select name="idproof" size="1"  id="idproof" >
				   <option value="" selected="selected">----select----</option>
                   <option value="Election Card">Election Card</option>
                   <option value="National ID card">National ID Card</option>
                   <option value="License Card">License Card</option>
                   <option value="Electricity Bill">Electricity Bill</option>	
				   <option value="Voter's Card">Voter's Card</option> 
                 </select><td></tr>
				 <tr>
        <td border="2"><b style="color:#000058;">Number of ID-Proof:</td><td><input type="text" name="idproofno" id="idproofno" maxlength="12"/></td>
    </tr> 
                  <tr>
                    <td border="2"><b style="color:#000058;">Crime Type:</td>
		<td>            
                 <select name="crimetype" size="1"  id="crimetype" >
				 <option>----select----</option>
                   <?php
						  $crimetypeQuery = "select *from mstr_crimetype";
						  $rscrimetype = mysql_query($crimetypeQuery);
						  while($rowcrimetype = mysql_fetch_array($rscrimetype))
						  {
						  ?>
                   <option value="<?php echo $rowcrimetype['crime_id']?>"><?php echo $rowcrimetype['crime_type']?></option>
                   <?php }?>
				   </select></td>
                   
                 </tr>       
<tr>
        <td border="2"><b style="color:#000058;">Brief description of incident:</td>
		<td><textarea name="crimedesc" cols="28" rows="3"  id="crimedesc"></textarea></td>
    </tr> 	
	<tr>
        <td border="2"><b style="color:#000058;">Photo of crime location:</td><td><input name="photo1" type="file" id="photo1" size="35"/></td>
    </tr>     
<tr>
        <td border="2"><b style="color:#000058;">Photo of crime location:</td><td><input name="photo2" type="file" id="photo2" size="35"/></td>
    </tr>
	<tr>
					<td colspan="2" align="left"><input name="submit" type="button"  id="submit" value="Submit"/></td></tr>
                </table>
              </form>
            </div>
		<div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>