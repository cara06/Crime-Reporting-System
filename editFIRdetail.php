<?php 
include("config.php");
include("sessionhandler.php");
include("header.php"); ?>
<body>
<div id="page">
            <table width="50%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-image:url('images/as.gif');" height="29">Edit Your FIR Information</th>
            </tr>
              <form action="chkFIRstatus.php" method="post" enctype="multipart/form-data" name="form1">
                <p>&nbsp;</p>
                <table width="770" height="473" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Your Address:</span> </td>
                    <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <textarea name="address" cols="32" rows="6"  id="address"></textarea>
                    </span></td>
                    <td width="74" align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                    <td width="296" align="left" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Contact Number: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input type="text" name="contactno" id="contactno" maxlength="12" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="29" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="114" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Brief description of incident:</span></td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><textarea name="crimedesc" cols="50" rows="6"  id="crimedesc"></textarea></td>
                  </tr><tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Photo of crime location:</span></td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><a href="registration.php" rel="facebox" title="Click to see photo">
                      <input name="crimephoto1" type="text"  size="35" />
                    </a></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Photo of crime location:</span></td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3"> <a href="registration.php" rel="facebox" title="Click to see photo"></a> <span class="style15 style3">
                      <input name="crimephoto2" type="text" id="crimephoto2" size="35" />
                    </span></span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                </table>
                <input name="cancel" type="button" class="header-button" id="cancel" value="Cancel"/>
                <p>
                  <input name="update" type="submit" class="header-button" id="update" value="Update"/>
                </p>
              </form>
            </div>
 <?php include("footer.php");?>
 </div>
	   
</body>
</html>