<?php
session_start ();
include("config.php");
include "header.php"
?>	 	
	<div id="page">
            <table width="80%"  align="center">
			<tr><td height="8" colspan="4"></td></tr>
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29" width="40%">ADD ADMIN</th>
            </tr>
        <form action="chkadmin.php" method="post"  enctype="multipart/form-data" name="form1">
		    <tr >
                 <td border="2"><b style="color:#000058;">First Name:</td><td><input type="text" name="fname"/></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Last Name:</td><td><input type="text" name="lname"/></td>
            </tr> 
			<tr>
        <td border="2"><b style="color:#000058;">Recent photo:</td><td> <input name="photo" type="file" id="photo" onclick=""  size="40"></td>
    </tr>
<tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Login Form</th>
            </tr>             
                <tr>
        <td border="2"><b style="color:#000058;">Username:</td><td><input type="text" name="username" id="username"></td>
				 <td><script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter username"});
				 </script> </td>
             </tr>
			  <tr>
        <td border="2"><b style="color:#000058;">Password:</td><td><input type="password" name="password" id="password"></td>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
             </tr>					 
			 <tr>
			  <td colspan="2"><input name="reset" type="reset" class="header-button" value="Reset" />
			    <input name="Submit" type="submit" class="header-button"  value="Submit" /></td>
			 </tr>	
</table>			 
  </form>		
	   </div>
 <?php include("footer.php");?>
  </div>
