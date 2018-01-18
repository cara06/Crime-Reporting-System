<?php
session_start();
include("config.php");
include("header.php") ?>
	   <div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Add Designation/Rank: </th>
            </tr>
			</table>
        <form action="chkdesignation.php" method="post"  enctype="multipart/form-data" name="form1">            
           <table width="50%" border="0" bgcolor="#FFFFFF" align="center">
<tr>
	<td colspan="6" height="27" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> Add Staff Designation</td>
	<td width="1%">
</tr>
<tr>
	<td height="9" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" >Designation Name</td>
	<td width="23%" ><input type="text" id="designation" name="designation" />		
		</td>
	<td width="45%"><font color="#FF0000"></font></td>
</tr>

<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><a href="viewdesignation.php"><input name="Cancel" type="button" id="Cancel" value="Cancel"/></a>
	<input name="save" type="submit"   id="save" value="Save"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>		   
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   
        </form> 
		 </div>  
    
	   <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>

</body>
</html>