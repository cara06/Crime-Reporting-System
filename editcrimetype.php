<?php 
include("sessionHandler.php");
include("header.php");
include("config.php");
$crimetype = $_GET['crimetype'];
$selectQuery = "select *from mstr_crimetype where crime_type = '".$crimetype."' ";

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
	//header("location:viewpolice.php");
?>
<div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Edit Crime Type </th>
            </tr>
<form name="editcrimetype.php" action="updatecrimetype.php" method="post">
<table width="79%" border="0" bgcolor="#FFFFFF">
<tr>
	<td height="10" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="27"></td>
  	<td width="36%" class="formField"><span class="style4 tableHeading style2">Old Crime Type Name</span>:</td>
	<td width="32%" ><input  readonly="yes" type="text" id="crimetype" name="crimetype" value="<?php echo $record["crime_type"]; ?>"/>		
		</td>
	<td width="27%"><font color="#FF0000">
	  <div id="messageSecond"></div></font></td>
</tr>
<tr>
  <td height="88">&nbsp;</td>
  <td class="formField">Old Description: </td>
  <td ><textarea name="oldcrimedesc" cols="32" rows="3"  id="oldcrimedesc" readonly="readonly" >
  <?php echo $record["description"]; ?></textarea></td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="35"></td>
  <td class="formField">New Crime Type Name: </td>
  <td ><input type="text" id="newcrimedesc" name="newcrimedesc" /></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="36%" class="formField">New  Description: </td>
	<td width="32%" >
	  <textarea name="newcrimedesc" cols="32" rows="3"  id="newcrimedesc"></textarea>
	<td width="27%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="36%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
</table>
</form>	
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
      <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>

</body>
</html>