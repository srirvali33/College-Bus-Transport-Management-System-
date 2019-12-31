<? session_start();?>
<? include_once 'dbsetting.php'?>
<style type="text/css">
<!--
.titles {
	font-size: 20px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
<center>
<?php 
$userid= $_SESSION['username'];
$password= $_SESSION['password'];
//echo $userid;
//echo $password;


$result = mysql_query("SELECT * FROM `studentregistration` WHERE `Hall_Ticket_No`='$userid' and `Parent_Phno`='$password'");


if($row = mysql_fetch_array($result))
	{

	
		?>
	
<img src="index_files/engclg.jpg" width="773" height="70"; style="border-radius:20px";>
<table width="753" cellpadding="0" cellspacing="0"  style="border:2px solid; border-radius:20px;>
  <col width="195">
  <col width="207">
  <tr height="25">
    <td height="25" width="366"><div align="center" class="titles">Student Details</div></td>
    <td rowspan="8" width="385" valign="top">
	
	  <div align="center"><IMG SRC="admin/photos/<?php echo $userid?>.jpg" WIDTH="103" HEIGHT="117" BORDER="0" ALT="">
        <br>
       <strong style="color:; font-size:16px">Student Copy</strong> </td>
  </tr>
  <tr height="20">
    <td height="20"><em>Enroll Id&nbsp;</em> : <strong><?php echo $row['Enroll_Id'];?></strong></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Hall Ticket No&nbsp;</em> : <strong><?php echo $row['Hall_Ticket_No'];?></strong></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Name</em> : <strong><?php echo $row['Name_Student'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Course&nbsp;</em> : <strong><?php echo $row['Course'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Branch&nbsp;</em> : <strong><?php echo $row['Branch'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Year&nbsp;</em>  : <strong><?php echo $row['Year'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Academic Year&nbsp;</em>  : <strong><?php echo $row['Academic_Year'];?></td>
  </tr>

  <tr height="20">
      <td colspan="2"><div align="center"><em><strong class="titles">Student personal details</strong></em></div></td>
  </tr>
  <tr>
    <td height="20"><em>Blood Group&nbsp;</em>  : <strong><?php echo $row['Blood_Group'];?></td>
	
    <td><em>House No&nbsp;</em>  : <strong><?php echo $row['HouseNo'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Gender</em>  : <strong><?php echo $row['Remarks1'];?></td>
    <td><em>Street Village&nbsp;</em>  : <strong><?php echo $row['Street_Village'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Parent Name&nbsp;</em>  : <strong><?php echo $row['Parent_Name'];?></td>
    <td><em>Mandal&nbsp;</em>  : <strong><?php echo $row['Mandal'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Student Phno&nbsp;</em>  : <strong><?php echo $row['Student_Phno'];?></td>
    <td><em>District&nbsp;</em>  : <strong><?php echo $row['District'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Parent Phno&nbsp;</em>  : <strong><?php echo $row['Parent_Phno'];?></td>
    <td><em>State&nbsp;</em>  : <strong><?php echo $row['State'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Email Id&nbsp;</em>  : <strong><?php echo $row['Email_Id'];?></td>
    <td><em>Pin code&nbsp;</em>  : <strong><?php echo $row['Pincode'];?></td>
  </tr>

  <tr height="31">
    <td height="31"><div align="center"><strong class="titles"><em>Bus Route Details</em></strong></div></td>
    <td><div align="center"><em><strong class="titles">Registration    Details</strong></em></div></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Route Name</em>   : <strong><?php echo $row['Rout_No'];?></td>
    <td><em>Date of    Registration&nbsp;</em>  : <strong><?php echo $row['Date_of_Registration'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Bus Stage Name&nbsp;</em>  : <strong><?php echo $row['Bus_Stage_Name'];?></td>
    <td><em>Registered College    Code</em>   : <strong><?php echo $row['Remarks2']; ?> </td>
  </tr>
  <tr height="20">
    <td height="20"><em>Account Status&nbsp;</em>  : <strong><?php echo $row['Account_Status'];?></td>
    <td><em>IP Address&nbsp;</em>  : <strong><?php echo $row['ip_Address'];?></td>
  </tr>
  <!--
  <tr height="20">
    <td height="20"><em>Bus Fee&nbsp;</em>  : <strong><?php echo $row['Bus_Fee'];?></td>
    <td></td>
  </tr>
  -->
  
  
  
    <tr height="20">
    <td height="20"><em> </em>   <strong> </td>
    <td> </td>
  </tr>
  
  
  
    <tr height="20">
    <td height="20"><div align="center"><strong><em>Student Sign</em>  : <strong></strong></div></td>
    <td><div align="center"><strong><em>Transport in-charge Sign</em></strong></div></td>
  </tr>
</table>














----------------------------------------------------------------------------------------------------------------------------------
<img src="index_files/engclg.jpg" width=773 height="70" style="border-radius:20px"/>
<table width="753" cellpadding="0" cellspacing="0"  style="border:2px solid; border-radius:20px;>
  <col width="195">
  <col width="207">
  <tr height="25">
    <td height="25" width="366"><div align="center" class="titles">Student Details</div></td>
    <td rowspan="8" width="385">
	
	  <div align="center"><IMG SRC="admin/photos/<?php echo $userid?>.jpg" WIDTH="103" HEIGHT="117" BORDER="0" ALT="">
        <br>
        <strong>Office Copy</strong> </div></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Enroll Id&nbsp;</em> : <strong><?php echo $row['Enroll_Id'];?></strong></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Hall Ticket No&nbsp;</em> : <strong><?php echo $row['Hall_Ticket_No'];?></strong></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Name</em> : <strong><?php echo $row['Name_Student'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Course&nbsp;</em> : <strong><?php echo $row['Course'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Branch&nbsp;</em> : <strong><?php echo $row['Branch'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Year&nbsp;</em>  : <strong><?php echo $row['Year'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Academic Year&nbsp;</em>  : <strong><?php echo $row['Academic_Year'];?></td>
  </tr>

  <tr height="20">
      <td colspan="2"><div align="center"><em><strong class="titles">Student personal details</strong></em></div></td>
  </tr>
  <tr>
    <td height="20"><em>Blood Group&nbsp;</em>  : <strong><?php echo $row['Blood_Group'];?></td>
	
    <td><em>House No&nbsp;</em>  : <strong><?php echo $row['HouseNo'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Gender</em>  : <strong><?php echo $row['Remarks1'];?></td>
    <td><em>Street Village&nbsp;</em>  : <strong><?php echo $row['Street_Village'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Parent Name&nbsp;</em>  : <strong><?php echo $row['Parent_Name'];?></td>
    <td><em>Mandal&nbsp;</em>  : <strong><?php echo $row['Mandal'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Student Phno&nbsp;</em>  : <strong><?php echo $row['Student_Phno'];?></td>
    <td><em>District&nbsp;</em>  : <strong><?php echo $row['District'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Parent Phno&nbsp;</em>  : <strong><?php echo $row['Parent_Phno'];?></td>
    <td><em>State&nbsp;</em>  : <strong><?php echo $row['State'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Email Id&nbsp;</em>  : <strong><?php echo $row['Email_Id'];?></td>
    <td><em>Pin code&nbsp;</em>  : <strong><?php echo $row['Pincode'];?></td>
  </tr>

  <tr height="31">
    <td height="31"><div align="center"><strong class="titles"><em>Bus Route Details</em></strong></div></td>
    <td><div align="center"><em><strong class="titles">Registration    Details</strong></em></div></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Route Name</em>   : <strong><?php echo $row['Rout_No'];?></td>
    <td><em>Date of    Registration&nbsp;</em>  : <strong><?php echo $row['Date_of_Registration'];?></td>
  </tr>
  <tr height="20">
    <td height="20"><em>Bus Stage Name&nbsp;</em>  : <strong><?php echo $row['Bus_Stage_Name'];?></td>
    <td><em>Registered College    Code</em>   : <strong><?php echo $row['Remarks2']; ?> </td>
  </tr>
  <tr height="20">
    <td height="20"><em>Account Status&nbsp;</em>  : <strong><?php echo $row['Account_Status'];?></td>
    <td><em>IP Address&nbsp;</em>  : <strong><?php echo $row['ip_Address'];?></td>
  </tr>
  <!--
  <tr height="20">
    <td height="20"><em>Bus Fee&nbsp;</em>  : <strong><?php echo $row['Bus_Fee'];?></td>
    <td></td>
  </tr>
  -->
  
  
  
    <tr height="20">
    <td height="20"><em> </em>   <strong> </td>
    <td> </td>
  </tr>
  
  
  
    <tr height="20">
    <td height="20"><div align="center"><strong><em>Student Sign</em>  : <strong></strong></div></td>
    <td><div align="center"><strong><em>Transport in-charge Sign</em></strong></div></td>
  </tr>
</table>

<?php
}
else

	{

  echo "<h4 style=\"font-family:Calibri\">Enter the Correct details  or Contact Transport I/C</h4	>";
	}



 
//  include "StudentRegAck.php"

?>  

</td>
  </tr>
</table>


<br><br>
<center><A style="font-family:Calibri" HREF="javascript:window.print()">Print</A> &  <a href="logout.php"><strong>Logout</strong></a></center>

</center>
