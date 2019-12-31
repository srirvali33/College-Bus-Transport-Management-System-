<?php 
include_once 'dbsetting.php'?>
<? include_once 'header.php'?>

<? include_once 'menu.php'?>

<?php

$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$todaydate = date("Y-m-d");
//echo $todaydate;
$result = mysql_query("SELECT * FROM `permissions` WHERE 1;");
while($row = mysql_fetch_array($result))
{


$sdatearry2 =$row['1'];
$edatearry2=$row['2'];
 

   
}
   
   


?>
<script language="javaScript" type="text/javascript" src="validation.js"></script>
<form action="StuReg.php"method="post" name="Reg" onSubmit="return ValidateForm(this)">



<table  border="0" align="center">

<tr>

    <td><input name="Enroll_Id" class="Enroll_Id" size="" type="HIDDEN"></td>
</tr> 

<tr>
    <td colspan=2><h2>Buspass Registration form</h2></td>
</tr> 

<tr>
    <td width="153">Hall Ticket No</td>
    <td width="417"><input name="Hall_Ticket_No" class="Hall_Ticket_No" size="" type="text"></td>
</tr> 





<tr>
    <td width="153">Name of the Student</td>
    <td><input name="Name_Student" class="Name_Student" size="50" type="text"> 
    as per Certificates</td>
</tr> 

<tr>
    <td width="153">Gender</td>
    <td>
	
	<select name="Remarks1" class="Remarks1">
	<option></option>
	<option>Female</option>
	<option>Male</option>
	</select>
	</td>
</tr> 


<tr>
    <td width="153">Name of the College</td>
    <td>
	
	<select name="Remarks2" class="Remarks2">
	<option></option>
	<option VALUE="CHTN">TARN-1</option>
	 <option VALUE="CHTS">TARS-2</option>
       <option VALUE="CHTP">TARP-3</option>
        <option VALUE="CHTB">TARB-4</option>
         <option VALUE="SCDC">SCDC-5</option>
       <option VALUE="SCPG">SCPG-6</option>
	    <option VALUE="SCJCB">SCJC-BOYS</option>
		 <option VALUE="SCJCG">SCJC-GIRLS</option>
	</select>
	</td>
</tr> 













<tr>
    <td width="153">Father / Parent Name</td>
    <td><input name="Parent_Name" class="Parent_Name"  size="50" type="text"></td>
</tr> 
<tr>
    <td width="153">Course</td>
    <td>
	
	<select name="Course" class="Course">
	<option></option>
	<option>B.Tech</option>
	<option>B.Pharmacy</option>
	<option>MBA</option>
	<option>MCA</option>
	<option>M.Tech</option>
	</select>
	</td>
</tr> 



<tr>
    <td width="153">Branch</td>
    <td>
<SELECT name="Branch" class="Branch" >
		<option></option>
	<option>CIVIL</option>
      <option>CSE</option>
       <option>ECE</option>
      <option>EEE</option>
      <option>MECH</option>
      <option>MBA</option>
      <option>MCA</option>
	  <option>B.Pharmacy</option>
	  <option>Pharm D</option>
	<option>INTERMEDIATE</option>
     	
	</SELECT>
	
	
	
	</td>
</tr> 


<tr>
    <td width="153">Year</td>
    <td>
	
	<select name="Year" class="Year">
     <option></option>
	<option>1st Year</option>
    <option>2nd Year</option>
    <option>3rd Year</option>
    <option>4th Year</option>
           	
	</SELECT>
	
	
	</td>
</tr> 



<tr>
    <td width="153">Rout No-Name</td>
    <td>	
	
	<SELECT name="Rout_No" class="Rout_No" size="" type="text">
		<option> </option> 
<?php

$result12 = mysql_query("SELECT DISTINCT(BusrouteNames) FROM `busroutes`ORDER BY `busroutes`.`BusrouteNames` , `BusrouteNumbers` ASC");

while($row12 = mysql_fetch_array($result12))
{
	
?>

		<option value="<?php echo $row12['BusrouteNames']; ?>"><?php echo $row12['BusrouteNames']; ?> </option> 


<?php


}



?>
	<option>Other</option> 
</SELECT>


	
	</td>
</tr> 
<tr>
    <td width="153">Your Bus Stop Name</td>
    <td><input name="Bus_Stage_Name" class="Bus_Stage_Name" size="60" type="text"></td>
</tr> 
<tr>



<tr>
    <td width="153">Academic_Year</td>
    <td>
	<select name="Academic_Year" class="Academic_Year">
	
	<option>2019-20</option>
    
           	
	</SELECT>
	
	</td>
</tr> 


<tr>
    <td colspan=2><h2>Communication Address</h2></td>
</tr> 


<tr>
    <td width="153">House No</td>
    <td><input name="HouseNo" class="HouseNo" size="" type="text"></td>
</tr> 
<tr>
    <td width="153">Street/Village</td>
    <td><input name="Street_Village" class="Street_Village" size="50" type="text"></td>
</tr> 
<tr>
    <td width="153">Mandal</td>
    <td><select name="Mandal" class="Mandal">
	
	
	<option></option> 
<option>Karimnagar</option>
	<option>Adilabad</option>
<option>Kothagudem</option>
<option>Hyderabad</option>
<option>Jagtial</option>
<option>Jangaon</option>
<option>Gadwal</option>
<option>Kamareddy</option>
<option>Karimnagar</option>
<option>Khammam</option>
<option>Kumuram Bheem</option>
<option>Mahabubabad</option>
<option>Mahabubnagar</option>
<option>Mancherial</option>
<option>Medak</option>
<option>Medchal</option>
<option>Mulugu</option>
<option>Nagarkurnool</option>
<option>Nalgonda</option>
<option>Narayanpet</option>
<option>Nirmal</option>
<option>Nizamabad</option>
<option>Rangareddy</option>
<option>Sangareddy</option>
<option>Siddipet</option>
<option>Suryapet</option>
<option>Vikarabad</option>
<option>Warangal (Rural)</option>
<option>Warangal (Urban)</option>
</select>
	
	</td>
</tr> 
<tr>
    <td width="153">District</td>
    <td><input name="District" class="District" size="" type="text"></td>
</tr> 
<tr>
    <td width="153">State</td>
<td><input name="State" class="State" size="" type="text" value="Telangana"></td>
</tr> 
<tr>
    <td width="153">Pincode</td>
    <td><input name="Pincode" class="Pincode" size="" type="text"></td>
</tr> 
<tr>
    <td width="153">Email Id</td>
    <td><input name="Email_Id" class="Email_Id" size="50" type="text"></td>
</tr> 
<tr>
    <td width="153">Student Phno</td>
    <td><input name="Student_Phno" class="Student_Phno" size="" type="text"></td>
</tr> 
<tr>
    <td width="153">Parent /Father Phno</td>
    <td><input name="Parent_Phno" class="Parent_Phno" size="" type="text"></td>
</tr> 

      <td width="153">Blood Group</td>
        <td>
	<select name="Blood_Group" class="Blood_Group" size="" type="text">
	
	
	
	
		<OPTION></OPTION>
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
	
	
	
	</td>
</tr> 
<tr>
   
    <td><input name="Account_Status" class="Account_Status" size="" type="HIDDEN"></td>
</tr> 
<tr>
   
    <td><input name="Bus_Fee" class="Bus_Fee" size="" type="HIDDEN"></td>
</tr> 
<tr>
  
    <td><input name="Date_of_Registration" class="Date_of_Registration" size="" type="HIDDEN"></td>
</tr> 
<tr>
  
    <td><input name="ip_Address" class="ip_Address" size="" type="HIDDEN"></td>
</tr> 
<tr>
    
    <td><input name="Date_of_Birth" class="Date_of_Birth" size="" type="HIDDEN"></td>
</tr> 

  
<tr>
    
    <td><input name="Remarks3" class="Remarks3" size="" type="HIDDEN"></td>
</tr> 
<tr>
   
    <td><input name="Remarks4" class="Remarks4" size="" type="HIDDEN"></td>
</tr> 
<tr>
  
    <td><input name="Remarks5" class="Remarks5" size="" type="HIDDEN"></td>
</tr> 
<tr>
    
    <td><input name="Remarks6" class="Remarks6" size="" type="HIDDEN"></td>
</tr> 
<tr>
    <td colspan="5" align="center"><input name="submit" type="submit"></td>
  </tr>

  

</table>
</form>
</BODY>
</HTML>


<?php include 'footer.php' ?>