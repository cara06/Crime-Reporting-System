<?php
include("sessionHandler.php");
include("header.php");
include("config.php");

$selectQuery = "select *from mstr_designation ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
//echo $selectQuery;
?>
<div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">List of All Designations </th>
            </tr></table>
      <table width="50%" align="center"> 
      <p align="center"><a href="designation.php">&nbsp;<img src="images/addButton.png" />&nbsp;Add Designation</a> 
        </strong></p>
	<tr>
		<td height="5" colspan="6"></td>
	</tr>
	<tr >
	  <td width="5%">&nbsp;</td>
      <td width="5%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="10%" class="style4 tableHeading style2">&nbsp;Designation  Name</td>      
      <td width="5%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="5%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="6" height="5"></td>
</tr>
<tr>
	<td colspan="6" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="6" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr >
      <td >&nbsp;</td>
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" ></a>&nbsp;&nbsp;<?php echo $record["desi_name"];?></td>      
      <td align="center" ><a href="editdesignation.php?desiname=<?php echo $record["desi_name"];?>">
	  <img title="Edit designation" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletedesignation.php?desiname=<?php echo $record["desi_name"];?>">
	  <img title="Delete designation Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    <tr >
      <td colspan="8" >&nbsp;</td>
    </tr>
  </table>
   <?php include("footer.php");?>
  </div>
  