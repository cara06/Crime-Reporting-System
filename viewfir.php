<?php
include("sessionhandler.php");
include("header.php");
include("config.php");
$selectFIRQuery = "select * from fir_details fd, mstr_policestation ps, mstr_designation md, 
mstr_officer mo,mstr_profile mp,mstr_area ma,mstr_city mc where fd.area_id = ps.area_id and 
mo.poilcestation_id = ps.poilcestation_id and md.desi_id = mo.desi_id and md.desi_name = 'Seargent' and 
mp.id = fd.reg_id and ma.area_id = fd.area_id and mc.city_id = ma.city_id and fd.status=0";

$resultSet = mysql_query($selectFIRQuery) or die(mysql_error());
?>
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">List of All registered FIR </th>
            </tr></table>
      <table width="100%" align="center">
        <tr>
		    <td width="5%"><span></span></td>
          	<td width="5%" height="20"><span class="style4 tableHeading style2"><b style="color:#000058;">S/No.</span></td>
			<td width="8%"><span class="style4"><b style="color:#000058;">Name</span></td>
			<td width="8%"><span class="style4"><b style="color:#000058;">Surname</span></td>
				<td width="15%"><span class="style4"><b style="color:#000058;">Crime</span></td>
			<td width="15%"><span class="style4"><b style="color:#000058;">Area</span></td>
			<td width="20%"><span class="style4"><b style="color:#000058;">Crime Location</span></td>
					<td width="10%"><span class="style4"><b style="color:#000058;">Date</span></td>
			<td width="10%"><span class="style4"><b style="color:#000058;">Id-Proof</span></td>
			<td width="18%"><span class="style4"><b style="color:#000058;">Id-No.</span></td>
			<td width="11%"><span class="style4"><b style="color:#000058;">Forward</span></td>
        </tr>
		<tr>
	  <td colspan="11"><hr /></td>
	  </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	
	<tr>
	<td></td>
		<td>
		<?php echo $i++; ?></td>
		<td><?php echo $record["first_name"];?></td>
		<td><?php echo $record["last_name"];?></td>
		<td><?php echo $record["description"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["crimelocation"];?></td>
		<td><?php echo $record["date"];?></td>
		<td><?php echo $record["id_proof"];?></td>
		<td><?php echo $record["id_proof_no"];?></td>
		<td>&nbsp;<a href="PIforward.php?fir_id=<?php echo $record["F_id"];?>">
		<img title="Forward" src="images/forward.png"  /></a>
		</td>
	   
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