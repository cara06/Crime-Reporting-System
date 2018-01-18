<?php 
include("config.php");
include("sessionhandler.php");
include("header.php");
$selectQuery = "select * from mstr_profile  where username = '".$_SESSION['username']."' ";

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:profile.php");
?>
	<div id="page">
            <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">My Profile Information</th>
            </tr>
        <form action="updateprofile.php" method="post"  enctype="multipart/form-data" name="">  
		  <tr align="top">
		<td width="115" rowspan="1" align="top" valign="top" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["profile_photo"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" rel="facebox">
				   Change Photo</a> <td> </tr>
		    <tr align="top">
                 <td border="2"><b style="color:#000058;">First Name:</td><td><?php echo $record["first_name"]; ?></td>
            </tr>
			<tr align="top">
                 <td border="2"><b style="color:#000058;">Middle Name:</td><td><?php echo $record["middle_name"]; ?></td>
            </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Last Name:</td><td><?php echo $record["last_name"]; ?></td>
    </tr>
    <tr>
        <td border="2"><b style="color:#000058;">Birth Date:</td><?php echo $record["Dob"]; ?></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Gender:</td><td><?php echo $record["gender"]; ?></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Address:</td><td><?php echo $record["address"]; ?> </td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Pin code:</td><td><?php echo $record["pincode"]; ?></td>
    </tr>
	<tr>
        <td border="2"><b style="color:#000058;">Contact No:</td><td><?php echo $record["contact_no"]; ?></td>
    </tr><tr>
        <td border="2"><b style="color:#000058;">E-mail ID:</td><td><?php echo $record["emailid"]; ?></td>
    </tr>
			 <tr>
			  <td colspan="2"><td><p>	<a href="viewprofile.php" title="view"><input name="view"  type="button"  value="Edit Profile >>>" /></a></p></td></td>
			 </tr>		   
		   </table>		   
        </form> 
	   </div>
 <div id="footer">
               <p style="font-size:80%;color:#000000;"> Developed By-<b>THOMAS LOIS VAKU @</b><b>NSU/NAS/318/011/012</b></b> </p>
            </div>
</div>
</body></html>