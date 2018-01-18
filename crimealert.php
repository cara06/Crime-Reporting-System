<?php 
session_start();
include("config.php");
include("header.php"); ?>
	<div id="page">
            <table width="45%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Create An Email Alert !!!!! </th>
            </tr>
			</table>
        <form action="chkcrimealert.php" method="post"  enctype="multipart/form-data" name="">
           <table width="80%" border="0" align="center">
             <tr bgcolor="#993366">
               <td width="170" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Alert District Name:</span>
               <td width="385" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Middlename"});
				 </script> 
                 </label>
               </span><span class="style15 style3">
               <select name="city" size="1"  id="city" >
                 <option>-----select-----</option>
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
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Alert Area Name:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
<select name="area" size="1"  id="area" >
<option>-----select-----</option>
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
				        </script>
</select>
 
                 </label>
               </span></td>
             </tr>
                  <tr>
               <td height="93" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Address:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <textarea name="address" cols="40" rows="5"  id="address"></textarea>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Address"});
				 </script> 
                 </label>
               </span></td>
             </tr>
                                    
			   <tr bgcolor="#993366">
               <td height="29" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Pin-code:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">                
                 <input name="pincode" type="text" id="pincode" maxlength="6">						 
				 <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>                 
               </span></td>
             </tr>     
<tr align="right" valign="middle" bgcolor="#FFFFFF">
			  <td height="28">
			  <input name="reset" type="reset" class="header-button" value="Reset" />
			    <input name="Submit" type="submit" class="header-button"  value="Submit" /></td>
			 </tr>				 
		   </table>		   		   
			 	   
		   </table>		   
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
        </form>
       
	   </div>
    <!--footer-->
    <?php  include("footer.php");?>
	</div>


</body></html>