
<?php session_start(); ?>
<?php include_once 'header.php'?>
<?php include_once 'dbsetting.php'?>
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

  <?php include_once 'menu.php'?>
  
    <h1>Hallticket wise Details</h1>
<script language="javaScript" type="text/javascript" src="htnovalid.js"></script>

<form action=""  method="post" name="Reg" onSubmit="return ValidateForm(this)">



<b>Hall Ticket Number</b>  
<input type="text" name="htno" size="10" maxlength="20" />
:  
<input type="submit" name="edit" value="Show Me" />
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 






<?php
if (isset($_REQUEST['edit'])) {




	$htno=strtoupper($_POST["htno"]);
	 
	//echo $htno;
	
?>
<body>
<font face="Calibri" size="+1">
    <?php


//$RollNumber=strtoupper(addslashes($_POST['RollNumber']));
 //echo $RollNumber;
$tmp=0;

//echo $eid;
$flag=0;
$result12 = mysql_query("SELECT * FROM `studentregistration` WHERE  Hall_Ticket_No='$htno'");
//$result = mysql_query("SELECT * FROM `idcards` WHERE `HallticketNo`='$HallticketNo' and password='$password'");
//SELECT * FROM `studentregistration2` WHERE `Parent_Phno`='94413147764' or `eid`='jaipal@gmail.com'

?>

<?php
if($row = mysql_fetch_array($result12))
{
?>
	
		<table  border="1" align="center">
<tr>
    <td width=""><em>Enroll Id</em></td>
    <td width=""><?php echo $row['Enroll_Id'];  ?></td>
	<td rowspan="5" valign="top" align="center"><img src="photos/<?php echo $row['Hall_Ticket_No']; ?>.jpg" width="68" height="83"></td>	
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
    <td width=""><?php echo $row['Account_Status']; ?> </td>
</tr>
 

 
<tr>
    <td width=""><em>Date of Registration</em></td>
    <td width=""><?php echo $row['Date_of_Registration'];  ?></td>
</tr>
</table>

<?php
}

   }


 
//  include "StudentRegAck.php"

?>  

</td>
  </tr>
</table>
<center><A style="font-family:Calibri" HREF="javascript:window.print()">Print</A></center>
</font>
<?php
}

?>





<? include_once 'footer.php'?>