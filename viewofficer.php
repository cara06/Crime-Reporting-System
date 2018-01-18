<?php
include("sessionHandler.php");
include("header.php");
include("config.php");

$selectAllUserQuery = "select * from mstr_officer mo,mstr_designation 
md,mstr_policestation mp where mo.poilcestation_id=mp.poilcestation_id and mo.desi_id=md.desi_id";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>
 
 <div id="page">
            <table width="50%"  align="center">
			<tr>
	<td height="8" colspan="4"></td>
</tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">List Of all Officers </th>
            </tr></table>
      <table width="70%" align="center"> 
      <p align="center"><a href="officerdetail.php">&nbsp;<img src="images/addButton.png" /><span class="style5">&nbsp;Add Officer</span></a> 
        </strong></p>
        <tr>
          	<td width="6%" height="37"><b style="color:#000058;">&nbsp;S/No</td>
			<td width="12%"><b style="color:#000058;">User Name </td>
			<td width="15%"><b style="color:#000058;">Join Date </td>
			<td width="25%"><b style="color:#000058;">Police Station</td>
			<td width="10%"><b style="color:#000058;">Rank</td>
			<td width="8%"><b style="color:#000058;">Edit </td>
			<td width="8%"><b style="color:#000058;">Delete </td>
        </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $i++;?></td>
		<td><?php echo $record["username"];?></td>
		<td><?php echo $record["Jdate"];?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["desi_name"];?></td>
		<td><a href="editofficer1.php?username=<?php echo $record["username"];?>"><img title="Edit crime type" src="images/edit.png"  /></a></td>
	    <td><a href="deleteofficer.php?username=<?php echo $record["username"];?>"> <img title="Delete crime type details" src="images/delete.png" /></a></td>
  </tr>
<?php
}
?>
  </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
	  <?php include("footer.php");?>
      </div>
