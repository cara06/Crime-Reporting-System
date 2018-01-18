<?php
session_start();
include("config.php");
include("header.php");
$selectQuery = "select *from mstr_login ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
//echo $selectQuery;
?>
			<div id="page">
 
     <table width="50%"  align="center">
	 <tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Administrator Details: </th>
            </tr>
      <table width="50%" border="0" align="center" >
	<tr>
		<td colspan="7" height="50" valign="middle" class="rowBorder">
		<a href="admin.php"><img src="images/addButton.png" align="absbottom"/><span class="highlight"> Add Admin </span></td>
	</tr>
	<tr >
	  <td width="3%">&nbsp;</td>
      <td width="12%" align="center"> <b style="color:#000058;">S/No.</td>
      <td width="28%" ><b style="color:#000058;">&nbsp;Username</td>      
      <td width="32%" ><b style="color:#000058;">Type</td>
	  <td width="25%" ><b style="color:#000058;">Last login</td>
      <td width="14%" align="center" ><b style="color:#000058;">Delete</td>
    </tr>
<tr>
	<td colspan="7" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="7" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr >
      <td >&nbsp;</td>
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" ></a>&nbsp;&nbsp;<?php echo $record["username"];?></td>      
      <td align="left" >&nbsp;<?php echo $record["type"] ;?></td>
	   <td align="left" >&nbsp;<?php echo $record["last_logindatetime"] ;?></td>
      <td align="center" ><a href="deleteadmin.php?=<?php echo $record["username"];?>">
	  <img title="Delete crime type Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
  </table>
   <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

       </div>
    <?php include("footer.php");?>
</div>
</div>
</p>
