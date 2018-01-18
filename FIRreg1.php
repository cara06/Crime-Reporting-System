<?php 
session_start();
include("config.php");
include("header.php");
?>	
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Step:1 Enter Reporting Person's Details</th>
            </tr>
         <form action="chkFIRreg1.php" method="post" enctype="multipart/form-data" name="form1">
			 <tr align="top">
                 <td border="2"><b style="color:#000058;">First Name:</td><td><input type="text" name="fname" id="fname" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Firstname"});
				 </script></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><input type="text" name="mname" id="mname">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				           " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Middlename"});
				 </script> </td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><input type="text" name="lname" id="lname">
		<script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				           " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> </td>
    </tr>
				 
                 <tr>
        <td border="2"><b style="color:#000058;">Gender:</td>
		<td><input type="radio" name="gender" value="Male"/>Male           
                 <input type="radio" name="gender" value="Female"/>Female</td>
    </tr>
                 <tr>
        <td border="2"><b style="color:#000058;">Date of Crime:</td><td><input type="text" name="date" id="date">
		<script type="text/javascript">
				    var f1 = new LiveValidation('date');
				    f1.add(Validate.Presence,{failureMessage: " Please enter date"});				   
				 </script> </td>
    </tr>
               <tr>
        <td border="2"><b style="color:#000058;">Time of Crime:</td><td><input type="text" name="time2" id="time2"></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;"> Your Address:</td><td><textarea name="address" cols="32" rows="3"  id="address"></textarea>
		<script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					      // " Invalid Address"});
				 </script> </td>
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
						<script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script>
                 </select></td>
    </tr>
	<tr> 
        <td border="2"><b style="color:#000058;">Area:</td>
		<td><select name="area" size="1"  id="area" >
                   <option value="">----select----</option>
				   <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                   <option value="<?php echo $rowArea['area_id']?>"> <?php echo $rowArea['area_name']?></option>
                   <?php }?>       
						<script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>				   </select>
               </td>
             </tr>
               <tr>
        <td border="2"><b style="color:#000058;">Pin code:</td><td><input type="text" name="pincode"></td>
    </tr>
	<script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script> 
	<tr>
        <td border="2"><b style="color:#000058;">Contact No:</td><td><input type="text" name="contactno">
		<script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script></td>
    </tr><tr>
        <td border="2"><b style="color:#000058;">E-mail ID:</td><td><input type="text" name="emailid">
		<script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> </td>
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
				   <script type="text/javascript">
				    var f1 = new LiveValidation('crimetype');
				    f1.add(Validate.Presence,{failureMessage: "Please enter type of crime"});				   
				 </script>
				   </select></td>
                   
                 </tr>
        <tr><td border="2"><b style="color:#000058;"> Crime Location Address:</td><td>
		<textarea name="crimelocation" cols="32" rows="3"  id="crimelocation"></textarea> 
		<script type="text/javascript">
				    var f1 = new LiveValidation('crimelocation');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime location"});
				  
				 </script></td>
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
				   <script type="text/javascript">
				    var f1 = new LiveValidation('idproof');
				    f1.add(Validate.Presence,{failureMessage: "Please enter identification proof"});				   
				 </script> 
                 </select><td></tr>
                  <tr>
        <td border="2"><b style="color:#000058;">Number of ID-Proof:</td><td><input type="text" name="idproofno" id="idproofno" maxlength="12"/>
		<script type="text/javascript">
				    var f1 = new LiveValidation('idproofno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script></td>
    </tr>        
<tr>
        <td border="2"><b style="color:#000058;">Brief description of incident:</td>
		<td><textarea name="crimedesc" cols="32" rows="3"  id="crimedesc"></textarea>
		<script type="text/javascript">
				    var f1 = new LiveValidation('crimedesc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime description"});
				   
				 </script>		</td>
    </tr> 	
	<tr>
        <td border="2"><b style="color:#000058;">Photo of crime location:</td><td><input name="photo1" type="file" id="photo1" size="35"/></td>
    </tr>     
<tr>
        <td border="2"><b style="color:#000058;">Photo of crime location:</td><td><input name="photo2" type="file" id="photo2" size="35"/></td>
    </tr>
 	               <tr>
					<td colspan="2" align="left"> <input name="reset" type="reset" class="header-button" value="Reset" />
		            <input name="next" type="submit" class="header-button" id="next" value="Next"/> </td>      
                 </tr>
           </table>
        </form> 
	   </div>
			<?php include("footer.php");?>
</div>
