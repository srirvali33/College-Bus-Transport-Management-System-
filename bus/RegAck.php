<? session_start(); include_once 'header.php'?>

<? include_once 'dbsetting.php'?>

<style type="text/css">

<!--

.titles {

	font-size: 24px;

	font-weight: bold;

	font-style: italic;

}

-->

</style>





<?php include_once 'menu.php'?>

<?php 







$result = mysql_query("SELECT *  FROM `studentregistration` WHERE `Rout_No` LIKE 'Vemulawada' ORDER BY `studentregistration`.`Enroll_Id` ASC");





while($row = mysql_fetch_array($result))

	{



	

?>

	


<center>
<table width="753" cellpadding="0" cellspacing="0">

  <col width="195">

  <col width="207">

  <tr height="25">

    <br><center>
	<td height="25" width="360"><div align="center" class="titles" style="
    margin-left: 100px">Student Details</div></td>
	</center>

    <td rowspan="8" width="385">

	

	  <div align="center"><IMG SRC="admin/photos/<?php echo $userid?>.jpg" WIDTH="103" HEIGHT="117" BORDER="0" ALT="">

        <br>

       <a href="photoupload.php" > <strong style="color:; font-size:16px; text-decoration-line: underline;">Upload Photo</strong>      </div></td>

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

  

</table>
</center>








<?php

}









 

//  include "StudentRegAck.php"



?>  



</td>

  </tr>

</table>
<center>
<table>

<tr>

<td>
<br>
<br>
<em><strong>Note :</strong></em>



<ol>

	<li>Upload your passport size photograph</li>

  <li>Check the above detail if any correction intimate  to computer operator at time form submission.</li>

  <li>Click on Generate Application form take print  out and <strong>logout</strong> properly.</li>

  <li>Submitted the printed application from to  computer operator.</li>
  <br>
<br>

</ol>

</td>

</tr>

</table>
<center>



<center><A style="font-family:Calibri" HREF="printapplication.php">Generate Application form</A></center>

