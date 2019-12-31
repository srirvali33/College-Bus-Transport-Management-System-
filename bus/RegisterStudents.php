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
  <center>
  <table  border="1">
   <tr>
   <td align="center" > Sno</td>
      <td align="center" > Bus Route Names </td>
	  <td align="center"> No of Students</td>
    </tr>
	
	


   <?php
$Count=0;
$Sn=0;
$result12 = mysql_query("SELECT COUNT(studentregistration.Rout_No),studentregistration.Rout_No FROM studentregistration studentregistration
GROUP BY studentregistration.Rout_No ORDER BY COUNT(studentregistration.Rout_No)  DESC");
while($row = mysql_fetch_array($result12))
{
$NoofStudents = $row[0];
$Count =$Count+$NoofStudents;
$BusRouteNames = $row[1];

?>
<tr>
	  <td ><?php echo  ++$Sn; ?></td>
      <td ><?php echo  $BusRouteNames; ?></td>
	  <td align="center"><?php echo $NoofStudents; ?></td>
</tr>

	<?php
	
}


?>
<tr>

      <td align="center" colspan="2" >Total Count</td><td align="center"><?php echo $Count; ?></td>
</tr>

        </table></center>
  
  <?php include 'footer.php' ?>
  </div>
