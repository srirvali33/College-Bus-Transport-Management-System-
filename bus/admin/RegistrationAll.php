<? session_start();  include_once 'header.php'?>
<hr width="1000" />

<? include_once 'menu.php'?>
  <? include_once 'dbsetting.php'?>
  <?php 

$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];





$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
if($row = mysql_fetch_array($result))
	{
	?>

<body background="StudentRegistration_files/background.jpg" >
<center>
    
<h2>Buspass Registration form</h2>
<table  border="1" align="center">
<tr>
<th>Sno</th> 
<th>Enroll_Id</th> 
<th>Hall_Ticket_No</th> 
<th>Name_Student</th> 
<th>Photo</th> 
<th>Course</th> 
<th>Branch</th> 
<th>Year</th> 
<th>Academic_Year</th> 
<th>Parent_Name</th> 
<th>HouseNo</th> 
<th>Street_Village</th> 
<th>Mandal</th> 
<th>District</th> 
<th>State</th> 
<th>Pincode</th> 
<th>Email_Id</th> 
<th>Student_Phno</th> 
<th>Parent_Phno</th> 
<th>Rout_No</th> 
<th>Bus_Stage_Name</th> 
<th>Blood_Group</th> 
<th>Account_Status</th> 
<th>Bus_Fee</th> 
<th>Date_of_Registration</th> 
<th>ip_Address</th> 


</tr>

<?php
$sn=0;
$result12 = mysql_query("SELECT * FROM `studentregistration` ORDER BY `studentregistration`.`Enroll_Id`  DESC");
while($row = mysql_fetch_array($result12))
{

$HallticketNo = $row['Hall_Ticket_No']; 
echo "<tr>";
echo "<td>".++$sn."</td>"; 
?>



<?php
	echo "<td><a href=Transaction_Upadate.php?edit=".$row['Enroll_Id']."&htno=".$HallticketNo.">".$row['Enroll_Id']."-Edit</td>";
?>



<?php
	//echo "<td><a href=Transaction_Upadate.php?edit=".$row['Enroll_Id']."&htno=".$HallticketNo.">".$row['Enroll_Id']."-Edit</td>";
//echo "<td>".$row['Enroll_Id']."</td>"; 
echo "<td>".$row['Hall_Ticket_No']."</td>"; 
echo "<td>".$row['Name_Student']."</td>"; 
?><td   align="center"><img src="photos/<?php echo $row['Hall_Ticket_No']; ?>.jpg" width="49" height="49"></td>	<?php
echo "<td>".$row['Course']."</td>"; 
echo "<td>".$row['Branch']."</td>"; 
echo "<td>".$row['Year']."</td>"; 
echo "<td>".$row['Academic_Year']."</td>"; 
echo "<td>".$row['Parent_Name']."</td>"; 
echo "<td>".$row['HouseNo']."</td>"; 
echo "<td>".$row['Street_Village']."</td>"; 
echo "<td>".$row['Mandal']."</td>"; 
echo "<td>".$row['District']."</td>"; 
echo "<td>".$row['State']."</td>"; 
echo "<td>".$row['Pincode']."</td>"; 
echo "<td>".$row['Email_Id']."</td>"; 
echo "<td>".$row['Student_Phno']."</td>"; 
echo "<td>".$row['Parent_Phno']."</td>"; 
echo "<td>".$row['Rout_No']."</td>"; 
echo "<td>".$row['Bus_Stage_Name']."</td>"; 
echo "<td>".$row['Blood_Group']."</td>"; 
echo "<td>".$row['Account_Status']."</td>"; 
echo "<td>".$row['Remarks2']."</td>"; 
echo "<td>".$row['Date_of_Registration']."</td>"; 
echo "<td>".$row['ip_Address']."</td>"; 



		 

		
		/* echo "<td>Bus_Fee</td><td>".$row['Bus_Fee']."</td>"; 
		echo "<td>Date_of_Registration</td><td>".$row['Date_of_Registration']."</td>"; 
		echo "<td>ip_Address</td><td>".$row['ip_Address']."</td>"; 
		echo "<td>Date_of_Birth</td><td>".$row['Date_of_Birth']."</td>"; 
		echo "<td>Remarks1</td><td>".$row['Remarks1']."</td>"; 
		echo "<td>Remarks2</td><td>".$row['Remarks2']."</td>"; 
		echo "<td>Remarks3</td><td>".$row['Remarks3']."</td>"; 
		echo "<td>Remarks4</td><td>".$row['Remarks4']."</td>"; 
		echo "<td>Remarks5</td><td>".$row['Remarks5']."</td>"; 
		echo "<td>Remarks6</td><td>".$row['Remarks6']."</td>"; 
*/
	echo "</tr>";
	
		
  //ho "<h4 style=\"font-family:Calibri\">Registration Success fully Completed <br> Submit the Application form to Transport Department </h4	>";
}

   echo " </table> ";

 
//  include "StudentRegAck.php"
}
?>  

</td>
  
</table>
<center><A style="font-family:Calibri" HREF="javascript:window.print()">Print</A></center>
<?php include 'footer.php'?>