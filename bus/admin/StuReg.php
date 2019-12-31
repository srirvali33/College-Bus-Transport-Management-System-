<?php 
include_once 'dbsetting.php'?>



<body >
<center>

    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{


$Enroll_Id=addslashes($_POST['Enroll_Id']);
//echo $Enroll_Id."<br>"; 
$Hall_Ticket_No=strtoupper(addslashes($_POST['Hall_Ticket_No']));
//echo $Hall_Ticket_No."<br>"; 
$Name_Student=strtoupper(addslashes($_POST['Name_Student']));
//echo $Name_Student."<br>"; 
$Course=addslashes($_POST['Course']);
//echo $Course."<br>"; 
$Branch=addslashes($_POST['Branch']);
//echo $Branch."<br>"; 
$Year=addslashes($_POST['Year']);
//echo $Year."<br>"; 
$Academic_Year=addslashes($_POST['Academic_Year']);
//echo $Academic_Year."<br>"; 
$Parent_Name=strtoupper(addslashes($_POST['Parent_Name']));
//echo $Parent_Name."<br>"; 
$HouseNo=addslashes($_POST['HouseNo']);
//echo $HouseNo."<br>"; 
$Street_Village=addslashes($_POST['Street_Village']);
//echo $Street_Village."<br>"; 
$Mandal=addslashes($_POST['Mandal']);
//echo $Mandal."<br>"; 
$District=addslashes($_POST['District']);
//echo $District."<br>"; 
$State=addslashes($_POST['State']);
//echo $State."<br>"; 
$Pincode=addslashes($_POST['Pincode']);
//echo $Pincode."<br>"; 
$Email_Id=addslashes($_POST['Email_Id']);
//echo $Email_Id."<br>"; 
$Student_Phno=addslashes($_POST['Student_Phno']);
//echo $Student_Phno."<br>"; 
$Parent_Phno=addslashes($_POST['Parent_Phno']);
//echo $Parent_Phno."<br>"; 
$Rout_No=addslashes($_POST['Rout_No']);
//echo $Rout_No."<br>"; 
$Bus_Stage_Name=addslashes($_POST['Bus_Stage_Name']);
//echo $Bus_Stage_Name."<br>"; 
$Blood_Group=addslashes($_POST['Blood_Group']);
//echo $Blood_Group."<br>"; 
$Account_Status="Processing";
//echo $Account_Status."<br>"; 
$Bus_Fee=addslashes($_POST['Bus_Fee']);
//echo $Bus_Fee."<br>"; 

 $timezone = "Asia/Calcutta";
    if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$Date_of_Registration=date('Y-m-d H:i:s');
//echo $Date_of_Registration."<br>"; 
$ip_Address=$_SERVER["REMOTE_ADDR"];
//echo $ip_Address."<br>"; 
$Date_of_Birth=addslashes($_POST['Date_of_Birth']);
//echo $Date_of_Birth."<br>"; 
$Remarks1=addslashes($_POST['Remarks1']);
//echo $Remarks1."<br>"; 
$Remarks2=addslashes($_POST['Remarks2']);
//echo $Remarks2."<br>"; 
$Remarks3=addslashes($_POST['Remarks3']);
//echo $Remarks3."<br>"; 
$Remarks4=addslashes($_POST['Remarks4']);
//echo $Remarks4."<br>"; 
$Remarks5=addslashes($_POST['Remarks5']);
//echo $Remarks5."<br>"; 
$Remarks6=addslashes($_POST['Remarks6']);
//echo $Remarks6."<br>"; 

mysql_query("INSERT INTO `studentregistration` (
`Enroll_Id` ,
`Hall_Ticket_No` ,
`Name_Student` ,
`Course` ,
`Branch` ,
`Year` ,
`Academic_Year` ,
`Parent_Name` ,
`HouseNo` ,
`Street_Village` ,
`Mandal` ,
`District` ,
`State` ,
`Pincode` ,
`Email_Id` ,
`Student_Phno` ,
`Parent_Phno` ,
`Rout_No` ,
`Bus_Stage_Name` ,
`Blood_Group` ,
`Account_Status` ,
`Bus_Fee` ,
`Date_of_Registration` ,
`ip_Address` ,
`Date_of_Birth` ,
`Remarks1` ,
`Remarks2` ,
`Remarks3` ,
`Remarks4` ,
`Remarks5` ,
`Remarks6`
)
VALUES ('', 	'$Hall_Ticket_No', 	'$Name_Student', 	'$Course', 	'$Branch', '$Year', 	'$Academic_Year', 	'$Parent_Name', 	'$HouseNo', 	'$Street_Village', 	'$Mandal', 	'$District', 	'$State', 	'$Pincode', 	'$Email_Id', 	'$Student_Phno', 	'$Parent_Phno', 	'$Rout_No', 	'$Bus_Stage_Name', 	'$Blood_Group', 	'$Account_Status', 	'$Bus_Fee', 	'$Date_of_Registration', 	'$ip_Address', 	'$Date_of_Birth', 	'$Remarks1', 	'$Remarks2', 	'$Remarks3', 	'$Remarks4', 	'$Remarks5', 	'$Remarks6');")  or die(mysql_error());

   
   $result = mysql_query("SELECT * FROM `studentregistration` WHERE `Hall_Ticket_No`='$Hall_Ticket_No';");
?>


<?php
if($row = mysql_fetch_array($result))
{
	
	?>
	
	
<table width="869" height="614" border="0">
  <tr>
    <td width="456" align="center">
<strong>Buspass Registration form Student Copy</strong>
	
	<table width="471" height="606"  border="1">
<tr>
    <td width="143"><em>Enroll Id</em></td>
    <td width="291"><?php echo $row['Enroll_Id'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Hall Ticket No</em></td>
    <td width="291"><?php echo $row['Hall_Ticket_No'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Name of the Student</em></td>
    <td width="291"><?php echo $row['Name_Student'];  ?></td>
</tr>




<tr>
    <td width="143"><em>Gender</em></td>
    <td width="291"><?php echo $row['Remarks1'];  ?></td>
</tr>
 

 
 
<tr>
    <td width="143"><em>College Name</em></td>
    <td width="291"><?php echo $row['Remarks2'];  ?></td>
</tr>
  
 
<tr>
    <td width="143"><em>Course</em></td>
    <td width="291"><?php echo $row['Course'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Branch</em></td>
    <td width="291"><?php echo $row['Branch'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Year</em></td>
    <td width="291"><?php echo $row['Year'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Academic Year</em></td>
    <td width="291"><?php echo $row['Academic_Year'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Father / Parent Name</em></td>
    <td width="291"><?php echo $row['Parent_Name'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>House No</em></td>
    <td width="291"><?php echo $row['HouseNo'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Street Village</em></td>
    <td width="291"><?php echo $row['Street_Village'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Mandal</em></td>
    <td width="291"><?php echo $row['Mandal'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>District</em></td>
    <td width="291"><?php echo $row['District'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>State</em></td>
    <td width="291"><?php echo $row['State'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Pincode</em></td>
    <td width="291"><?php echo $row['Pincode'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Email_Id</em></td>
    <td width="291"><?php echo $row['Email_Id'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Student Phno</em></td>
    <td width="291"><?php echo $row['Student_Phno'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Parent Phno</em></td>
    <td width="291"><?php echo $row['Parent_Phno'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Rout No-Rout</em></td>
    <td width="291"><?php echo $row['Rout_No'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Bus Stop Name</em></td>
    <td width="291"><?php echo $row['Bus_Stage_Name'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Blood Group</em></td>
    <td width="291"><?php echo $row['Blood_Group'];  ?></td>
</tr>
 
<tr>
    <td width="143"><em>Account Status</em></td>
    <td width="291"><?php echo $row['Account_Status'];  ?></td>
</tr>
 

 
<tr>
    <td width="143"><em>Date of Registration</em></td>
    <td width="291"><?php echo $row['Date_of_Registration'];  ?></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Sign of the Student</td>
<td>Sign of Transport I/C</td>
</tr>


</table>
	
	
	
	
	
	
	
	
	
	</td>
	
	<TD width="16">&nbsp;&nbsp;</TD>
	
    <td width="325">
	
	    <td width="456" align="center">
<strong>Buspass Registration form office Copy</strong>
	
	
	
	<table width="471" height="606"  border="1">
<tr>
    <td width=""><em>Enroll Id</em></td>
    <td width=""><?php echo $row['Enroll_Id'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Hall Ticket No</em></td>
    <td width=""><?php echo $row['Hall_Ticket_No'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Name of the Student</em></td>
    <td width=""><?php echo $row['Name_Student'];  ?></td>
</tr>




<tr>
    <td width=""><em>Gender</em></td>
    <td width=""><?php echo $row['Remarks1'];  ?></td>
</tr>
 

 
 
<tr>
    <td width=""><em>College Name</em></td>
    <td width=""><?php echo $row['Remarks2'];  ?></td>
</tr>
  
 
<tr>
    <td width=""><em>Course</em></td>
    <td width=""><?php echo $row['Course'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Branch</em></td>
    <td width=""><?php echo $row['Branch'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Year</em></td>
    <td width=""><?php echo $row['Year'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Academic Year</em></td>
    <td width=""><?php echo $row['Academic_Year'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Father / Parent Name</em></td>
    <td width=""><?php echo $row['Parent_Name'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>House No</em></td>
    <td width=""><?php echo $row['HouseNo'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Street Village</em></td>
    <td width=""><?php echo $row['Street_Village'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Mandal</em></td>
    <td width=""><?php echo $row['Mandal'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>District</em></td>
    <td width=""><?php echo $row['District'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>State</em></td>
    <td width=""><?php echo $row['State'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Pincode</em></td>
    <td width=""><?php echo $row['Pincode'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Email_Id</em></td>
    <td width=""><?php echo $row['Email_Id'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Student Phno</em></td>
    <td width=""><?php echo $row['Student_Phno'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Parent Phno</em></td>
    <td width=""><?php echo $row['Parent_Phno'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Rout No-Rout</em></td>
    <td width=""><?php echo $row['Rout_No'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Bus Stop Name</em></td>
    <td width=""><?php echo $row['Bus_Stage_Name'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Blood Group</em></td>
    <td width=""><?php echo $row['Blood_Group'];  ?></td>
</tr>
 
<tr>
    <td width=""><em>Account Status</em></td>
    <td width=""><?php echo $row['Account_Status'];  ?></td>
</tr>
 

 
<tr>
    <td width=""><em>Date of Registration</em></td>
    <td width=""><?php echo $row['Date_of_Registration'];  ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Sign of the Student</td>
<td>Sign of Transport I/C</td>
</tr>
</table>
	
	
	
	

	
	
	
	</td>
  </tr>
</table>



<?php
		

}
   }

  
//  include "StudentRegAck.php"

?>  
<center><A style="font-family:Calibri" HREF="javascript:window.print()">Print</A></center>





