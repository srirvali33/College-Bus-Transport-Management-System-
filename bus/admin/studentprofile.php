<?php session_start(); ?>
<? include_once 'header.php'?>
<? include_once 'dbsetting.php'?>
<hr width="1000" />

<? include_once 'menu.php'?>
<?php
$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];


$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
if($row = mysql_fetch_array($result))
	{

	
 
?>

<!---************************** Session Starts ********************************************************-->	

  <? include_once 'menu.php'?>

<script language="javaScript" type="text/javascript" src="validation.js"></script>
<form action=""  method="post" name="Reg" onSubmit="return ValidateForm(this)">


<b>Enroll ID</b>  
<input type="text" name="htno" size="10" maxlength="20" />
:  
<input type="submit" name="edit" value="Show Me" />
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 






<?php
if (isset($_REQUEST['edit'])) {




	$htno=strtoupper($_POST["htno"]);
	 
	//echo $htno;
	
	
	$result12 = mysql_query("SELECT * FROM `studentregistration` WHERE  Enroll_Id='$htno'");
	$tmp=0;
if($row = mysql_fetch_array($result12))
{
$tmp++;

?>

</h1>
<!---************************** Session Starts ********************************************************-->


<BODY>
<style>
.tdbg{ background-color:#0099FF;}
}
</style>




<font face="Calibri" size="+1">

<form action="StuRegupdateedit.php" method="post" name="Reg" onSubmit="return ValidateForm(this)">

<script language="javaScript" type="text/javascript" src="validation.js"></script>
<TABLE  border="0" align="center">






<tr>
<TD><em><strong>Enroll Id</strong></em></TD>	
<TD><input readonly="" type="text" name="Enroll_Id" size="" value="<?php echo $row['Enroll_Id']; ?>"></TD>
	<td rowspan="5" valign="top" align="center"><img src="photos/<?php echo $row['Hall_Ticket_No']; ?>.jpg" width="68" height="83"></td>	
  </tr>


 



<tr>
<TD><em><strong>HallTicket No</strong></em></TD>	
<TD><input type="text" name="Hall_Ticket_No" size="" value="<?php echo $row['Hall_Ticket_No']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Name of the Student</strong></em></TD>	
<TD><input type="text" name="Name_Student" size="50" value="<?php echo $row['Name_Student']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Gender</strong></em></TD>	
<TD>

	<select name="Remarks1" class="Remarks1">
	<option><?php echo $row['Remarks1']; ?></option>
	<option>Female</option>
	<option>Male</option>
	</select> </TD>
  </tr>


 



<tr>
<TD><em><strong>College Name </strong></em></TD>	
<TD>
<select name="Remarks2" class="Remarks2">
	<option><?php echo $row['Remarks2']; ?></option>
	<option VALUE="CHTN">CHTN-1</option>
	 <option VALUE="CHTS">CHTS-2</option>
       <option VALUE="CHTP">CHTP-3</option>
        <option VALUE="CHTB">CHTB-4</option>
         <option VALUE="SCDC">SCDC-5</option>
       <option VALUE="SCPG">SCPG-6</option>
	</select></TD>
  </tr>


 



<tr>
<TD><em><strong>Course</strong></em></TD>	
<TD>
	<select name="Course" class="Course">
	<option><?php echo $row['Course']; ?></option>
	<option>B.Tech</option>
	<option>B.Pharmacy</option>
	<option>MBA</option>
	<option>MCA</option>
	<option>M.Tech</option>
	</select>

</TD>
  </tr>


 



<tr>
<TD><em><strong>Branch</strong></em></TD>	
<TD>
<SELECT name="Branch" class="Branch" >
		<option><?php echo $row['Branch']; ?></option>
	<option>CIVIL</option>
      <option>CSE</option>
       <option>ECE</option>
      <option>EEE</option>
      <option>IT</option>
      <option>MECH</option>
      <option>MBA</option>
      <option>MCA</option>
	  <option>B.Pharmacy</option>
      <option>M.Tech</option>
     	
	</SELECT>

</TD>
  </tr>


 



<tr>
<TD><em><strong>Year</strong></em></TD>	
<TD>


	<select name="Year" class="Year">
     <option><?php echo $row['Year']; ?></option>
	<option>1st Year</option>
    <option>2nd Year</option>
    <option>3rd Year</option>
    <option>4th Year</option>
           	
	</SELECT>
	</TD>
  </tr>


 



<tr>
<TD><em><strong>Rout No-Name</strong></em></TD>	
<TD>

	<SELECT name="Rout_No" class="Rout_No" size="" type="text">
		<option><?php echo $row['Rout_No']; ?> </option> 
<?php


$result12 = mysql_query("SELECT distinct(BusrouteNames) FROM `busroutes`ORDER BY `busroutes`.`BusrouteNames` , `BusrouteNumbers` ASC");

while($row11 = mysql_fetch_array($result12))
{

?>

		<option value="<?php echo $row11['BusrouteNames']; ?>"><?php echo $row11['BusrouteNames']; ?> </option> 


<?php
}



?>
		<option>Other</option> 
</SELECT>

</TD>
  </tr>


 



<tr>
<TD><em><strong>Bus StopName</strong></em></TD>	
<TD><input type="text" name="Bus_Stage_Name" size="60" value="<?php echo $row['Bus_Stage_Name']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Academic Year</strong></em></TD>	
<TD><input type="text" name="Academic_Year" size="" value="<?php echo $row['Academic_Year']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Parent / Father Name</strong></em></TD>	
<TD><input type="text" name="Parent_Name" size="50" value="<?php echo $row['Parent_Name']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>House No</strong></em></TD>	
<TD><input type="text" name="HouseNo" size="" value="<?php echo $row['HouseNo']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Street/Village</strong></em></TD>	
<TD><input type="text" name="Street_Village" size="50" value="<?php echo $row['Street_Village']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Mandal</strong></em></TD>	
<TD>


<select name="Mandal" class="Mandal">
	
	
	<option><?php echo $row['Mandal']; ?></option> 
<option>Bejjanki</option> 
<option>Bheemadevarpalle</option> 
<option>Boinpalle</option> 
<option>Chandurthi</option> 
<option>Chigurumamidi</option> 
<option>Choppadandi</option> 
<option>Dharmapuri</option> 
<option>Dharmaram</option> 
<option>Elgaid</option> 
<option>Elkathurthi</option> 
<option>Ellanthakunta</option> 
<option>Gambhiraopet</option> 
<option>Gangadhara</option> 
<option>Gollapalle</option> 
<option>Husnabad</option> 
<option>Huzurabad</option> 
<option>Ibrahimpatnam</option> 
<option>Jagtial</option> 
<option>Jammikunta</option> 
<option>Julapalle</option> 
<option>Kamalapur</option> 
<option>Kamanpur</option> 
<option>Karimnagar</option> 
<option>Kataram</option> 
<option>Kathlapur</option> 
<option>Kodimial</option> 
<option>Koheda</option> 
<option>Konaraopet</option> 
<option>Koratla</option> 
<option>Mahadevpur</option> 
<option>Malharrao</option> 
<option>Mallapur</option> 
<option>Mallial</option> 
<option>Manakondur</option> 
<option>Manthani</option> 
<option>Medipalle</option> 
<option>Metpalle</option> 
<option>Mustabad</option> 
<option>Mutharam (Mahadevpur)</option> 
<option>Mutharam (Manthani)</option> 
<option>Odela</option> 
<option>Peddapalle</option> 
<option>Pegadapalle</option> 
<option>Raikal</option> 
<option>Ramadugu</option> 
<option>Ramagundam</option> 
<option>Saidapur</option> 
<option>Sarangapur</option> 
<option>Shankarapatnam</option> 
<option>Siricilla</option> 
<option>Srirampur</option> 
<option>Sultanabad</option> 
<option>Timmapur (LMD Colony)</option> 
<option>Veenavanka</option> 
<option>Velgatoor</option> 
<option>Vemulawada</option> 
<option>Yellareddipet</option> 
<option value="">Other</option> 
</select>
<input type="" name="mandal1">
</TD>
  </tr>


 



<tr>
<TD><em><strong>District</strong></em></TD>	
<TD><input type="text" name="District" size="" value="<?php echo $row['District']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>State</strong></em></TD>	
<TD><input type="text" name="State" size="" value="<?php echo $row['State']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Pincode</strong></em></TD>	
<TD><input type="text" name="Pincode" size="" value="<?php echo $row['Pincode']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Email Id</strong></em></TD>	
<TD><input type="text" name="Email_Id" size="50" value="<?php echo $row['Email_Id']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Student Phno</strong></em></TD>	
<TD><input type="text" name="Student_Phno" size="" value="<?php echo $row['Student_Phno']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Parent / Father Phno</strong></em></TD>	
<TD><input type="text" name="Parent_Phno" size="" value="<?php echo $row['Parent_Phno']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Blood Group</strong></em></TD>	
<TD>


<select name="Blood_Group" class="Blood_Group" size="" type="text">
	
	
	
	
		<OPTION><?php echo $row['Blood_Group']; ?></OPTION>
	<OPTION VALUE="A +VE">A +VE</OPTION>
<OPTION VALUE="A -VE">A -VE</OPTION>
<OPTION VALUE="B +VE">B +VE</OPTION>
<OPTION VALUE="B -VE">B -VE</OPTION>
<OPTION VALUE="O +VE">O +VE</OPTION>
<OPTION VALUE="O -VE">O -VE</OPTION>
<OPTION VALUE="AB +VE">AB +VE</OPTION>
<OPTION VALUE="AB -VE">AB -VE</OPTION>
<OPTION VALUE="Don't Know">Don't Know</OPTION>
	</select>




</TD>
  </tr>


 



<tr>
<TD><em><strong>Account Status</strong></em></TD>	
<TD><select name="Account_Status" >

<option><?php echo $row['Account_Status']; ?></option>
<option>Submitted</option>
<option>Processing</option>
<option>Rejected</option>
</select>
</TD>
  </tr>


 



<tr>
<TD><em><strong>Bus Fee</strong></em></TD>	
<TD><input type="text" name="Bus_Fee" size="" value="<?php echo $row['Bus_Fee']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Date of Registration</strong></em></TD>	
<TD><input type="text" name="Date_of_Registration" size="" value="<?php echo $row['Date_of_Registration']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>ip Address</strong></em></TD>	
<TD><input readonly="" type="text" name="ip_Address" size="" value="<?php echo $row['ip_Address']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Date of Birth</strong></em></TD>	
<TD><input type="text" name="Date_of_Birth" size="" value="<?php echo $row['Date_of_Birth']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Receipt</strong></em></TD>	
<TD><input type="text" name="Remarks3" size="" value="<?php echo $row['Remarks3']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Amount</strong></em></TD>	
<TD><input type="text" name="Remarks4" size="" value="<?php echo $row['Remarks4']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Remarks5</strong></em></TD>	
<TD><input type="text" name="Remarks5" size="" value="<?php echo $row['Remarks5']; ?>"></TD>
  </tr>


 



<tr>
<TD><em><strong>Remarks6</strong></em></TD>	
<TD><input type="text" name="Remarks6" size="" value="<?php echo $row['Remarks6']; ?>"></TD>
  </tr>
</TABLE>
<input type="submit">
</form>
</BODY>

<?php



}

}

}


	?>


<? include_once 'footer.php'?>
