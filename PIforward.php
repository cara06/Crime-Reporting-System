<?php 
include("sessionHandler.php");
include("config.php");
include("header.php"); ?>
        <form action="chkPIforward.php" method="post" name="emailForm" id="emailForm" class="form-validate">
		<div id="page">
 
     <table width="50%"  align="center">
            <tr>
                <th colspan="2" style="background-color:#C0E2D4;" height="29">Forwarding Message to Investigating Officer: </th>
            </tr>
                  <tr>
                    <td width="202" height="59" align="right"><br />
                      <span class="style15">Police Officer's Name:</span>
                      </label></td>
                    <td width="378"><span class="style15 style3">&nbsp;
                      <select name="officer" class="list"  id="officer"  >
                        <option >------select------</option>						
                        <?php
						  $officerQuery = "select *from mstr_officer where username<> '".$_SESSION['username']."' ";
						  $rsOfficer = mysql_query($officerQuery);
						  while($rowOfficer = mysql_fetch_array($rsOfficer))
						  {
						  ?>
                        <option value="<?php echo $rowOfficer['username']?>"> <?php echo $rowOfficer['username']?></option>
                        <?php }?>
                                                                                                                                    </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="171" align="right"><span class="style15">Enter your Message:</span></td>
                    <td>
                      <textarea cols="50" rows="10" name="msg" id="msg" class="inputbox required" >
                    </textarea></td>
                  </tr>
                  <tr>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;
                      <p><button type="submit">Send</button>
                       </p></td>
                  </tr>
                </table>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			<label for="contact_subject">&nbsp;</label>
			    <span class="style15">
			    <label id="contact_textmsg" for="contact_text">&nbsp; </label>
			    </span>
			    <p><span class="style15">			      </span><br>
			      <br>
			      </p>
			    </div>
        </form> 
	   


</body></html>