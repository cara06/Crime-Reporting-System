<?php
include("sessionHandler.php");
include("header.php");
include("config.php");
$selectAllUserQuery = "select *from fir_forward where username = '".$_SESSION['username']."' ";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>
<div id="page">
 
     <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">View Inbox </th>
            </tr></table>
      <table width="60%" align="center">
		
  
        <tr>
			<td width="8%">F_id</td>
			<td width="14%">From</td>
			<td width="15%">Description</td>
			<td width="11%">Date</td>
			<td width="7%">Reply</td>
			<td width="7%">Delete</td>
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
		<td><?php echo $record["F_id"];?></td>
		<td><?php echo $record["from"];?></td>
		<td><?php echo $record["description"];?></td>
		<td><?php echo $record["dt_time"];?></td>
		<td><a href="PIforward.php?fir_id=<?php echo $record["F_id"];?>">
		<img title="Forward" src="images/forward.png"  /></a>
	    <td><a href="deletepolicestation.php?F_id=<?php echo $record["F_id"];?>">Delete</a></td>
  </tr>
	<tr>
	  <td colspan="7"><hr /></td>
	  </tr>
  
<?php
}
?>
</table>     
   
<?php include("footer.php");?>
</div>
