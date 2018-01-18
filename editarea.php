<?php 
ob_start();
include("sessionhandler.php");
include("header.php");
include("config.php");
$areaname = $_GET['areaname'];
$selectQuery = "select *from mstr_area where area_name = '".$areaname."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
?>
<html>
<body>
	   <div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Edit Area </th>
            </tr>
			</table>
<form name="editarea" action="updatearea.php" method="post">
<table width="70%" border="0" bgcolor="#FFFFFF" align="center">

<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="35">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old Area Name</span>:</td>
	<td width="23%" ><input  readonly="yes" type="text" id="area" name="area" value="<?php echo $record["area_name"]; ?>"/>		
			</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="34">&nbsp;</td>
  	<td width="27%" class="formField">New Area Name: </td>
	<td width="23%" >
	<input type="text" id="newareaname" name="newareaname" />
		</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="80" colspan="4"></td>
</tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
</form>	
 
    
	   <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>

</body>
</html>