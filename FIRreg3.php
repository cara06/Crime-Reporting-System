<?php 
session_start();
include("config.php");
include("header.php");
?>
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Step 3: Details Of Victim</th>
            </tr>
         <form action="chkFIRreg3.php" method="post">
			 <tr align="top">
                 <td border="2"><b style="color:#000058;">First Name:</td><td><input type="text" name="fname" id="fname" ></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><input type="text" name="mname" id="mname"></td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><input type="text" name="lname" id="lname"></td>
    </tr>
				 
                 <tr>
        <td border="2"><b style="color:#000058;">Gender:</td>
		<td><input type="radio" name="gender" value="Male"/>Male           
                 <input type="radio" name="gender" value="Female"/>Female</td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Address:</td><td><textarea name="address" cols="25" rows="3"  id="address"></textarea> </td>
    </tr>
        <tr>
        <td border="2"><b style="color:#000058;">City:</td>
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
		    <td><input name="reset" type="reset" class="header-button" value="Reset" />
		    <input name="submit" type="submit" class="header-button" id="submit" value="Submit"/> </td>         
         </tr>
		 </table>
        </form> 
	   </div>
       	<?php include("footer.php");?>
</div>
