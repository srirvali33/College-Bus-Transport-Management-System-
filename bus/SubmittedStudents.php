<?php 

include_once 'dbsetting.php'?>
<? include_once 'header.php'?>

<? include_once 'menu.php'?>
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


  <br />  <br />
 <div align="center">
 
   <strong>Bus pass Application form Submitted Students</strong><br />
  <table  border="1">
    
    
     <tr>
   <td align="center" > Sno</td>
      <td align="center" > Ht No </td>
	  <td align="center">Student Name</td>
	  <td align="center">College Name</td>
	  <td width="140" align="center">Route Name</td>
	    <td width="140" align="center">Status</td>
    </tr>
    
    <?php
$Count=0;
$Sn=0;
$result12 =mysql_query("SELECT `Hall_Ticket_No`, `Name_Student`, `Remarks2`, Account_Status, Rout_No FROM `studentregistration` WHERE 1 ORDER BY `studentregistration`.`Hall_Ticket_No` ASC");
while($row = mysql_fetch_array($result12))
{
$NoofStudents = $row[0];
$Count =$Count+$NoofStudents;
$BusRouteNames = $row[1];
$CollegeName = $row[2];
$Account_Status = $row[3];
$Rout_No = $row[4]

?>
    <tr>
	<td   align="center"><?php echo ++$Sn; ?></td>
      <td  align="center"><?php echo $NoofStudents; ?></td>
          <td  ><?php echo  $BusRouteNames; ?></td>
		      <td  align="center" ><?php echo  $CollegeName; ?></td>
			   
				   <td align="center"><?php echo  $Rout_No; ?></td>
				    
					
					<?php 
					if($Account_Status=="Processing")
					{
						echo "<td align=center bgcolor=red>".$Account_Status."</td>"; 
											
					}
					else
					echo "<td align=center>".$Account_Status."</td>"; 
					?>
</tr>
    
    <?php
	
}


?>


      <td align="center" colspan="2" >Total Count</td><td align="center"><?php echo $Sn; ?></td>
</tr>

        </table>
  
  <?php include 'footer.php' ?>
  </div>
