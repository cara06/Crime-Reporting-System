<?php
session_start();
include("config.php");
include("header.php")?>
<div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Add District Details: </th>
            </tr>
       <form action="chkcity.php" method="post">
           <table width="70%" height="155" border="0" bgcolor="#FFFFFF">
<tr>
	<td width="1%" height="28">&nbsp;</td>
  	<td width="35%" align="right" >District:</td>
	<td width="37%" ><input type="text" id="city" name="city" />		
		</td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="next" type="submit" id="next" value="Save"/></td>
</tr>
</table>

 <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    </div></p>
  <p>
    </div>
    </div>
    </div>
    </div>
	
  </p>
  <p>&nbsp;</p>
       </form> 
	<?php include("footer.php");?>
</div>

</body>
</html>