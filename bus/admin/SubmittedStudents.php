<?PHP  session_start();
 include_once 'header.php'?>
<? include_once 'dbsetting.php'?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
-->
</style>


  <?php include_once 'menu.php'?>
  
  
  <h1>Student Photos Upload Verification</h1>
  
  
<?php
$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];
$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");

if($row = mysql_fetch_array($result))
	{
	
	?>
	
<script language="javaScript" type="text/javascript" src="FormSubmissionDetailsvalid.js"></script>
<form action=""  method="post" name="Reg" onSubmit="return ValidateForm(this)">


<b>Form Submission Details </b>  
<select name="FormSubmissionDetails">
<option></option>
<option>Submitted</option>
<option>Processing</option>
<option>Rejected</option>
<option>Pending</option>
<option value="%%">All</option>
</select>  
<input type="submit" name="edit" value="Show Me" />
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 
<?php
if (isset($_REQUEST['edit'])) {




	$FormSubmissionDetails=strtoupper($_POST["FormSubmissionDetails"]);
	 
	//echo $FormSubmissionDetails;
	
	
?>

	
<style type="text/css">
  <style>
 
 td{font-family:Calibri}
 
 </style>
 


 <style>
 
 td{font-family:Calibri}
 .st1{font-family:Calibri; font-size:15px; color:#0000CC}
 table, th, td
{
border-collapse:collapse;
}
 
 </style>

 <div align="center">
 
   <strong>Bus pass Application form Submitted Students</strong><br />
  <table  border="1">
    
    
     <tr>
   <td align="center" > Sno</td>
	<td   align="center">Enroll_Id</td>
	<td   align="center">Hall_Ticket_No</td>
	<td   align="center">Name_Student</td>
	<td   align="center">Student_Phno</td>
	<td   align="center">Parent_Phno</td>
    <td   align="center">Rout_No</td>	
	    <td   align="center">Account Status</td>	
		    <td   align="center">Photo</td>	
    </tr>
    
    <?php
$Count=0;
$Sn=0;
$result12 =mysql_query("SELECT * FROM `studentregistration` WHERE `Account_Status` LIKE '%$FormSubmissionDetails%' ORDER BY `Remarks1`,`Enroll_Id`");
while($row = mysql_fetch_array($result12))
{
$Account_Status = $row['Account_Status'];
$HallticketNo = $row['Hall_Ticket_No']; 
?>
    <tr>
	<td   align="center"><?php echo ++$Sn;; ?></td>

<?php
	echo "<td><a href=Transaction_Upadate.php?edit=".$row['Enroll_Id']."&htno=".$HallticketNo.">".$row['Enroll_Id']."-Edit</td>";
?>
		
	<td   align="center"><?php echo $row['Hall_Ticket_No']; ?></td>
	<td   align="center"><?php echo $row['Name_Student']; ?></td>
	<td   align="center"><?php echo $row['Student_Phno']; ?></td>
	<td   align="center"><?php echo $row['Parent_Phno']; ?></td>
    <td   align="center"><?php echo $row['Rout_No']; ?></td>	
	

					<?php 
					if($Account_Status=="Processing")
					{
						echo "<td align=center bgcolor=red>".$Account_Status."</td>"; 
											
					}
					else
					echo "<td align=center>".$Account_Status."</td>"; 
					?>
					
	<td   align="center"><img src="photos/<?php echo $row['Hall_Ticket_No']; ?>.jpg" width="49" height="49"></td>	
				
					
</tr>
    
    <?php
	
}


?>


      <td align="center" colspan="2" >Total Count</td><td align="center"><?php echo $Sn; ?></td>
</tr>

        </table>
  
  
  
  <?php
  
  }
  
  }
  ?>
    </div>
	</table>
	</table>
	</table>
  <?php include 'footer.php' ?>

