<?php session_start(); ?>
<? include_once 'header.php'?>
<? include_once 'dbsetting.php'?>
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
  
  <h1>Delete Student Record With Enroll ID wise</h1>
<script language="javaScript" type="text/javascript" src="validation.js"></script>
<form action=""  method="post" name="Reg" onSubmit="return ValidateForm(this)">


<b>Enroll ID</b>  
<input type="text" name="htno" size="10" maxlength="20" />
:  
<input type="submit" name="edit" value="Delete" />
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 






<?php
if (isset($_REQUEST['edit'])) {




	$enno=strtoupper($_POST["htno"]);
	 
	//echo $htno;
	
	
	$result12 = mysql_query("SELECT * FROM `studentregistration` WHERE  Enroll_Id='$enno'");
	$tmp=0;
if($row = mysql_fetch_array($result12))
{
$tmp++;

?>

</h1>
<!---************************** Session Starts ********************************************************-->


<BODY>
<style>
.tdbg{ background-color:#0099FF;}
}
</style>




<font face="Calibri" size="+1">

<form action="DeleteEnrollwise.php" method="post" name="Reg" onSubmit="return ValidateForm(this)">

<script language="javaScript" type="text/javascript" src="validation.js"></script>
<TABLE  border="0" align="center">






<tr>
<TD><em><strong>Enroll Id</strong></em></TD>	
<TD><input readonly="" type="hidden" name="Enroll_Id" size="" value="<?php echo $row['Enroll_Id']; ?>"><?php echo $row['Enroll_Id']; ?></TD>
  </tr>


 



<tr>
<TD><em><strong>HallTicket No</strong></em></TD>	
<TD><?php echo $row['Hall_Ticket_No']; ?></TD>
  </tr>


 



<tr>
<TD><em><strong>Name of the Student</strong></em></TD>	
<TD><?php echo $row['Name_Student']; ?></TD>
  </tr>


 



<tr>
<TD><em><strong>Gender</strong></em></TD>	
<TD>
<?php echo $row['Remarks1']; ?></TD>
  </tr>


 



<tr>
<TD><em><strong>College Name </strong></em></TD>	
<TD>
<?php echo $row['Remarks2']; ?></TD>
  </tr>


 



<tr>
<TD><em><strong>Course</strong></em></TD>	
<TD>
	<?php echo $row['Course']; ?>

</TD>
  </tr>


 



<tr>
<TD><em><strong>Branch</strong></em></TD>	
<TD>
<?php echo $row['Branch']; ?>
</TD>
  </tr>


 



<tr>
<TD><em><strong>Year</strong></em></TD>	
<TD>


<?php echo $row['Year']; ?>
	</SELECT>
	</TD>
  </tr>

</TABLE>
<input type="submit" value="Confrim to Delete">
</form>
</BODY>

<?php



}

}

}


?>


<? include_once 'footer.php'?>
