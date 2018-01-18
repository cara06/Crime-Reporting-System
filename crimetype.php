<?php 
session_start();
include("config.php");
include("header.php"); ?>
	<div id="page">
            <table width="45%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Add Type of Crime: </th>
            </tr>
			</table>
        <form action="chkcrimetype.php" method="post"  enctype="multipart/form-data" name="form1">
		<table align="center">
<tr>
	<td height="8" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="28">&nbsp;</td>
  	<td width="35%" align="right" >Crime Type Name:</td>
	<td width="37%" ><input type="text" id="crimetype" name="crimetype" />		
		</td>
</tr>
<tr>
	<td width="1%" height="61">&nbsp;</td>
  	<td width="35%" align="right">Crime Type Description: </td>
	<td width="37%" >
	<textarea name="crimedesc" cols="32" rows="3"  id="crimedesc"></textarea>
				
	</td>
	<td width="23%">&nbsp;</td>
</tr>
<tr>
	<td height="14" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="35%"></td>
	<td colspan="2" ><a href="viewcrimetype.php"><input name="Cancel" type="button"  id="Cancel" value="Cancel"/></a>
	<input name="save" type="submit"  id="save" value="Save"/></td>
</tr>

</table>	
<p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>	      
        </form>  
<?php include("footer.php");?>
  </div> 
