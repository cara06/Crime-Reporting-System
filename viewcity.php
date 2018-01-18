<?php
session_start ();
include("config.php");
include("header.php");
$selectQuery = "select *from mstr_city ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
//echo $selectQuery;
?>

<div id="page">

     <table width="50%"  align="center">
	 <tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">View District Details: </th>
            </tr>
      <table width="50%" border="0" align="center" >
	<tr>
		<td colspan="7" height="50" valign="middle" class="rowBorder">
		<a href="city.php"><img src="images/view.png" align="absbottom"/> Add District</a> </td>
	</tr>
	<tr >
	  <td width="3%">&nbsp;</td>
      <td width="12%" align="center"> <b style="color:#000058;">S/No.</td>     
      <td width="22%" ><b style="color:#000058;">District Name </td>
      <td width="11%" align="center"><b style="color:#000058;">Edit</td>
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
      <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></a></td>      
      <td align="center" ><a href="editcity.php?cityname=<?php echo $record["city_name"];?>">
	  <img title="Edit City" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletecity.php?cityname=<?php echo $record["city_name"];?>">
	  <img title="Delete City Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    <tr  >
      <td colspan="8" >&nbsp;</td>
    </tr>
  </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </div>
      <?php include("footer.php");?>
      </div>
