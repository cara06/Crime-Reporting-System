<?php 
include("sessionHandler.php");
include("config.php");
include("header.php");

?>
			<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="4" style="background-color:#C0E2D4;" height="29">Add Area Details: </th>
            </tr>
			 </table>
			 <tr>
      <td colspan="9" >&nbsp;</td>
    </tr>
        <form action="chkarea.php" method="post">
		<table align="center">
  <tr>
        <td border="2"><b style="color:#000058;">Town:</td>
    <td><select name="city" size="1"  id="city" >
      <option>-----select-----</option>
      <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
      <option value="<?php echo $rowCity['city_id']?>"><?php echo $rowCity['city_name']?></option>
      <?php }?>
        </select></td>
		</tr>
  	<tr>
	<td border="2"><b style="color:#000058;">Area Name:</td>
<td><input type="text" id="area" name="area" />	</td></tr>

 <tr><td><input name="next" type="submit"  id="next" value="Save"/></td></tr>
 </table>
 <tr>
      <td colspan="9" >&nbsp;</td>
    </tr>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  </form>
 
<?php include("footer.php");?>
</div>

</body>
</html>