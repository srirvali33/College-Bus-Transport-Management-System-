<?php session_start(); ?>

<? include_once 'header.php'?>

<? include_once 'dbsetting.php'?>






  <?php include_once 'menu.php'?>
  
  <hr> 

  <h1>Student Registration Details Update</h1>

<?php

$userid= $_SESSION['username'];

$password= $_SESSION['password'];

$fid= $_SESSION['fid'];



$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");

if($row = mysql_fetch_array($result))

	{

 

?>



<!---************************** Session Starts ********************************************************-->	





<body >



  <p>

    <?php

if($_SERVER["REQUEST_METHOD"] == "POST")

{

//***************



$Enroll_Id=addslashes($_POST['Enroll_Id']); 

//echo "<Br>".$Enroll_Id; 

$Hall_Ticket_No=addslashes($_POST['Hall_Ticket_No']); 

//echo "<Br>".$Hall_Ticket_No; 

$Name_Student=addslashes($_POST['Name_Student']); 

//echo "<Br>".$Name_Student; 

$Course=addslashes($_POST['Course']); 

//echo "<Br>".$Course; 

$Branch=addslashes($_POST['Branch']); 

//echo "<Br>".$Branch; 

$Year=addslashes($_POST['Year']); 

//echo "<Br>".$Year; 

$Academic_Year=addslashes($_POST['Academic_Year']); 

//echo "<Br>".$Academic_Year; 

$Parent_Name=addslashes($_POST['Parent_Name']); 

//echo "<Br>".$Parent_Name; 

$HouseNo=addslashes($_POST['HouseNo']); 

//echo "<Br>".$HouseNo; 

$Street_Village=addslashes($_POST['Street_Village']); 

//echo "<Br>".$Street_Village; 

$Mandal=addslashes($_POST['Mandal']); 

//echo "<Br>".$Mandal; 

$District=addslashes($_POST['District']); 

//echo "<Br>".$District; 

$State=addslashes($_POST['State']); 

//echo "<Br>".$State; 

$Pincode=addslashes($_POST['Pincode']); 

//echo "<Br>".$Pincode; 

$Email_Id=addslashes($_POST['Email_Id']); 

//echo "<Br>".$Email_Id; 

$Student_Phno=addslashes($_POST['Student_Phno']); 

//echo "<Br>".$Student_Phno; 

$Parent_Phno=addslashes($_POST['Parent_Phno']); 

//echo "<Br>".$Parent_Phno; 

$Rout_No=addslashes($_POST['Rout_No']); 

//echo "<Br>".$Rout_No; 

$Bus_Stage_Name=addslashes($_POST['Bus_Stage_Name']); 

//echo "<Br>".$Bus_Stage_Name; 

$Blood_Group=addslashes($_POST['Blood_Group']); 

//echo "<Br>".$Blood_Group; 

$Account_Status=addslashes($_POST['Account_Status']); 

//echo "<Br>".$Account_Status; 

$Bus_Fee=addslashes($_POST['Bus_Fee']); 

//echo "<Br>".$Bus_Fee; 

$Date_of_Registration=addslashes($_POST['Date_of_Registration']); 

//echo "<Br>".$Date_of_Registration; 

$ip_Address=addslashes($_POST['ip_Address']); 

//echo "<Br>".$ip_Address; 

$Date_of_Birth=addslashes($_POST['Date_of_Birth']); 

//echo "<Br>".$Date_of_Birth; 

$Remarks1=addslashes($_POST['Remarks1']); 

//echo "<Br>".$Remarks1; 

$Remarks2=addslashes($_POST['Remarks2']); 

//echo "<Br>".$Remarks2; 

$Remarks3=addslashes($_POST['Remarks3']); 

//echo "<Br>".$Remarks3; 

$Remarks4=addslashes($_POST['Remarks4']); 

//echo "<Br>".$Remarks4; 

$Remarks5=addslashes($_POST['Remarks5']); 

//echo "<Br>".$Remarks5; 

$Remarks6=addslashes($_POST['Remarks6']); 

//echo "<Br>".$Remarks6; 









   

 //  UPDATE `aicte`.`studentdataaicte` SET `RollNumber` = '12N01F0002' WHERE `studentdataaicte`.`RollNumber` = '12N01F0001';



mysql_query("UPDATE `studentregistration` SET 

`Hall_Ticket_No`= '$Hall_Ticket_No',

`Name_Student`= '$Name_Student',

`Remarks1`= '$Remarks1',

`Remarks2`= '$Remarks2',

`Course`= '$Course',

`Branch`= '$Branch',

`Year`= '$Year',

`Rout_No`= '$Rout_No',

`Bus_Stage_Name`= '$Bus_Stage_Name',

`Academic_Year`= '$Academic_Year',

`Parent_Name`= '$Parent_Name',

`HouseNo`= '$HouseNo',

`Street_Village`= '$Street_Village',

`Mandal`= '$Mandal',

`District`= '$District',

`State`= '$State',

`Pincode`= '$Pincode',

`Email_Id`= '$Email_Id',

`Student_Phno`= '$Student_Phno',

`Parent_Phno`= '$Parent_Phno',

`Blood_Group`= '$Blood_Group',

`Account_Status`= '$Account_Status',

`Bus_Fee`= '$Bus_Fee',

`Date_of_Registration`= '$Date_of_Registration',

`ip_Address`= '$ip_Address',

`Date_of_Birth`= '$Date_of_Birth',

`Remarks3`= '$Remarks3',

`Remarks4`= '$Remarks4',

`Remarks5`= '$Remarks5',

`Remarks6`= '$Remarks6'

 WHERE `studentregistration`.`Enroll_Id` ='$Enroll_Id';") or die(mysql_error());

	

echo "<h2 style=\"font-family:Calibri\">Registration Success fully Completed Please click on <a href=\"2.php\" target=\"_self\" >Home</a> </h2	>";

	

//echo  "<br><br><h2 style=\"font-family:Calibri\">".$Enroll_Id." Record Updated Successfully  </h2	><br><br>";

	

include_once 'footer.php';



								

								 //header( 'Location: StudentRegAck2.php');

   }

   }

  ?>









 

