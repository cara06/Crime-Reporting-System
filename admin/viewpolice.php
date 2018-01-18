<?php
include("header.php");
include("config.php");
$selectAllUserQuery = "select *from policestation";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>
 <div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">List of All Officers </th>
            </tr></table>
      <table width="85%">
	  <a href="policestationdetail.php">Add police</a> | 
	  <?=base64_decode($_GET['msg'])?></strong>
      <table width="85%">
        <tr>
          	<td width="7%">No.</td>
			<td width="7%">Police Station name</td>
			<td width="7%">Area name	</td>
			<td width="7%">Address</td>
			<td width="6%">Pincode</td>
			<td width="8%">Contact no</td>
			<td width="6%">Emailid</td>
			<td width="8%">City name</td>
			<td width="8%">Contact person</td>
			<td width="5%">Edit</td>
			<td width="5%">Delete</td>
        </tr>
        <?
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	<tr class="row-a">
		<td>
		<?=$i++></td>
		<td><?=$record["policestation_name"];?></td>
		<td><?=$record["area_name"];?></td>
		<td><?=$record["address"];?></td>
		<td><?=$record["pincode"];?></td>
		<td><?=$record["contact_no"];?></td>
		<td><?=$record["Email_id"];?></td>
		<td><?=$record["city_name"];?></td>
		<td><?=$record["contact_person"];?></td>
		<td><a href="editofficer.php?username=<?=$record["username"];?>">Edit</a></td>
	    <td><a href="deleteofficer.php?username=<?=$record["username"];?>">Delete</a></td>
  </tr>
<?
}
?>
</table>     
    </div>
  </div>
<? include("footer.php");?>
