<?php 
session_start();
include("config.php");
include("header.php");
$desiname = $_GET['desiname'];
$selectQuery = "select *from mstr_designation where desi_name = '".$desiname."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
	//header("location:viewpolice.php");
?>

<body>
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Edit Designation </th>
            </tr>
<form name="editdesignation.php" action="updatedesignation.php" method="post">
<tr>
	<td colspan="5" height="79" align="left" valign="middle">&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> <span class="highlight">Edit Designation Name </span></td>
	<td width="1%"><td width="1%"></td>
</tr>
<tr>
	<td width="1%" height="29">&nbsp;</td>
  	<td width="27%">Old Designation Name:</td>
	<td width="27%" ><input  readonly="yes" type="text" id="designation" name="designation" value="<?php echo $record["desi_name"]; ?>"/>		
	</td>
	<td width="41%"><font color="#FF0000">
	 </font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%">New Designation Name: </td>
	<td width="27%" >
	<input type="text" id="newdesignation" name="newdesignation" />
	</td>
	<td width="41%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" id="reset" value="Reset"/>
	<input name="update" type="submit" id="update" value="Update"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>
<p>&nbsp;</p>
 
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>	
  </div>
 <?php include("footer.php");?>
 </div>
	   
</body>
</html>