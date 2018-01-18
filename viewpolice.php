<?php
include("sessionHandler.php");
include("header.php");
include("config.php");

$selectAllUserQuery = "select *from mstr_policestation mp,mstr_area a where a.area_id = mp.area_id";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>
<div id="page">
     <table width="50%"  align="center">
	 <tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">View Details of Police Stations: </th>
            </tr></table>
      <p align="center"><a href="policestationdetail.php">&nbsp;<img src="images/addButton.png" /><span class="style5">&nbsp;Add Police Station </span></a> 
        </strong></p>
      <table width="60%" align="center">
		<tr>
	  <td colspan="7"></td>
	  </tr>
        <tr>
          	<td width="8%" height="23" ><span class="style4 tableHeading style2" align="centre"><b style="color:#000058;">&nbsp;S/No</span></td>
			<td width="30%"><span class="style4 tableHeading style2"><b style="color:#000058;">Police station Name</span></td>
			<td width="16%"><span class="style4 tableHeading style2"><b style="color:#000058;">Area Name</span>	</td>
			<td width="30%"><span class="style4 tableHeading style2"><b style="color:#000058;">Address</span></td>
			<td width="11%"><span class="style4 tableHeading style2"><b style="color:#000058;">Pincode</span></td>
			<td width="7%"><span class="style4 tableHeading style2"><b style="color:#000058;">Edit</span></td>
			<td width="7%"><span class="style4 tableHeading style2"><b style="color:#000058;">Delete</span></td>
        </tr>
		<tr>
	  <td colspan="7"><hr /></td>
	  </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	
	<tr>
		<td align="center">
		<?php echo $i++; ?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["address"];?></td>
		<td><?php echo $record["pincode"];?></td>
		<td><a href="editpolicestation1.php?psname=<?php echo $record["policestation_name"];?>">
		<img title="Edit police station " src="images/edit.png"  /></a>
		</td>
	    <td><a href="deletepolicestation.php?psname=<?php echo $record["policestation_name"];?>">
		<img title="Delete police station Details" src="images/delete.png" /></a></td>
  </tr>
	<tr>
	  <td colspan="11"><hr /></td>
	  </tr>
  
<?php
}
?>
</table> 
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <?php include("footer.php");?>
      </div>
</div>
</p>