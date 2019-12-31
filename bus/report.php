
<?php include 'header.php'?>
<?php include 'dbsetting.php'?>
<strong style="margin: 50%;position: relative;
    top: 10px;"><a href="index.php">Home</a></strong><br>

<center>
<br />
<table width="900" height="567" border="0">
<tr>






<td width="8" height="474">
<td width="299" valign="top" >
<div align="center">
<strong><a href="SubmittedStudents.php">Bus Pass Submitted Students view all</a></strong><br>
  </div>


  <table width="279"  border="1">
    
    <tr align="center"><td>    <strong>Route_Names </strong></td><td><strong> No of Students</strong></td></tr>
    
    
    
    <?php
$Count=0;
$Sn=0;
$result12 = mysql_query("SELECT COUNT(studentregistration.Rout_No),studentregistration.Rout_No FROM studentregistration studentregistration
where (studentregistration.Account_Status = 'Submitted')
GROUP BY studentregistration.Rout_No ORDER BY COUNT(studentregistration.Rout_No)  DESC ");
while($row = mysql_fetch_array($result12))
{
$NoofStudents = $row[0];
$Count =$Count+$NoofStudents;
$BusRouteNames = $row[1];

?>
    <tr>
      
      <td width="143" ><?php echo  $BusRouteNames; ?></td>
	      <td width="120" align="center"><?php echo $NoofStudents; ?></td>
    </tr>
    
    <?php
	
}


?>
    <tr>
      
      <td align="center" colspan="1" >Total Count</td><td align="center"><?php echo $Count; ?></td>
    </tr>
  </table>
</div>
</td>
<td width="10"></td>








<td width="246" rowspan="2" align="center" valign="top" >
<h3 style="font-size:20px;border: 1px solid red;
    background: yellow;
    border-radius: 35px; margin-right: 15px;">
Welcome to Online Bus pass Registration</h3>
<img src="INDEX_FILES/Collegebus.jpg" width="178" height="126" />
<h4>

<?php


$result = mysql_query("SELECT * FROM `permissions` WHERE 1;");
while($row = mysql_fetch_array($result))
{


$sdatearry2=explode("-",$row['1']);
$sdate = $sdatearry2[2]."-".$sdatearry2[1]."-".$sdatearry2[0];
$edatearry2=explode("-",$row['2']);
$edate = $edatearry2[2]."-".$edatearry2[1]."-".$edatearry2[0];

echo "<a href=StudentRegistrationpage2.php><h3 style='font-size:13px'>Registration  available dates between  ".$sdate." &amp; ".$edate."</a></h3>"; 
echo "<h3 style='font-size:13px'>".$row['message']."</a></h3>"; 
   
   }

?>





</h4>
<br>

</td>

<td width="325" valign="top" >
<div align="center"><strong><a href="RegisterStudents.php">Bus Pass Register Students</a></strong><br />

  
</div>


  <table width="279"  border="1">
    
    <tr align="center"><td>    <strong>Route_Names </strong></td><td><strong> No of Students</strong></td></tr>
    
    
    
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
      
      <td width="143" ><?php echo  $BusRouteNames; ?></td>
	      <td width="120" align="center"><?php echo $NoofStudents; ?></td>
    </tr>
    
    <?php
	
}


?>
    <tr>
      
      <td align="center" colspan="1" >Total Count</td><td align="center"><?php echo $Count; ?></td>
    </tr>
  </table>
</div>
</td>
</tr>

</table>
</td>
</html>

<?php include 'footer.php'?>

