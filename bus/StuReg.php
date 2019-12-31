
<?php include_once 'header.php'?> 

<?php include_once 'dbsetting.php'?>



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
VALUES ('', 	'$Hall_Ticket_No', 	'$Name_Student', 	'$Course', 	'$Branch', '$Year', 	'$Academic_Year', 	'$Parent_Name', 	'$HouseNo', 	'$Street_Village', 	'$Mandal', 	'$District', 	'$State', 	'$Pincode', 	'$Email_Id', 	'$Student_Phno', 	'$Parent_Phno', 	'$Rout_No', 	'$Bus_Stage_Name', 	'$Blood_Group', 	'$Account_Status', 	'$Bus_Fee', 	'$Date_of_Registration', 	'$ip_Address', 	'$Date_of_Birth', 	'$Remarks1', 	'$Remarks2', 	'$Remarks3', 	'$Remarks4', 	'$Remarks5', 	'$Remarks6');")  or die("Unable to insert ur record beacuse of ".mysql_error()."</i>");

   
   $result = mysql_query("SELECT * FROM `studentregistration` WHERE `Hall_Ticket_No`='$Hall_Ticket_No';");
?>

	<strong><h1><i>Your Registration successfully completed <a href=index.php>Re-Login</a> </i></h1></strong>

<?php
		


   }

  
//  include "StudentRegAck.php"

?>  






<?php include_once 'footer.php'?>