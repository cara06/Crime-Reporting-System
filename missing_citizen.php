<?php
session_start();
include("config.php");
 include("header.php"); 
 if(!$_SESSION['type']=="user")
	header("location:login.php?msg=You are not a registered user!"); ?>
<div id="page">
     <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Enter Details Of Missing Person </th>
            </tr>
        <form action="chkmissingcitizen.php" method="post" enctype="multipart/form-data" name="form1">             
             <tr >
                 <td border="2"><b style="color:#000058;">First Name:</td><td> <input name="fname" type="text" id="fname" /></td>
            </tr>
             <tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><input name="mname" type="text" id="mname"/></td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><input name="lname" type="text" id="lname"/></td>
    </tr>
              <tr>
        <td border="2"><b style="color:#000058;">Gender:</td><td><input type="radio" name="gender" value="Male"/>Male       
                 <input type="radio" name="gender" value="Female"/>Female</td>
    </tr>
            <tr>
        <td border="2"><b style="color:#000058;">Address:</td><td><textarea name="address" cols="28" rows="3"  id="address"></textarea> </td>
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
                   <?php }?>                                                                           </select>
               </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Date of missing: </td><td><input type="text" name="date" id="date"/></td>
               </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Time of missing:
               </td> <td><input type="text" name="time2" id="time2" />
               </td></tr>
             <tr>
        <td border="2"><b style="color:#000058;">Special Clue:</td ><td>
			   <input type="text" name="specialclue" id="specialclue"/>
					   </td></tr>
             <tr>
        <td border="2"><b style="color:#000058;">Brief Description of Incident:</td>                
               <td align="left" bgcolor="#FFFFFF">
			   <textarea name="missingdesc" cols="28" rows="3"  id="missingdesc"></textarea>
			   		   </td>
             </tr>
             <tr>
        <td border="2"><b style="color:#000058;">Photo of Missing Person:</td>                 
               <td><input name="photo" type="file" id="photo" size="35" /></td>
             </tr>
		   <tr><td colspan="2"> <input name="reset" type="reset" value="Reset" />
		    <input name="submit" type="submit" id="submit" value="Submit"/>  </td> </tr>       
          </table>			 
        </form> 
	   <?php include("footer.php");?>
               </div>
</body></html>