
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

  <? include_once 'menu.php'?>

<script language="javaScript" type="text/javascript" src="Route_Novalid.js"></script>
<form action="id_route.php"  method="post" name="Reg" onSubmit="return ValidateForm(this)">
<b>Form Submission Details </b>  
<select name="FormSubmissionDetails">
<option></option>
<option>Submitted</option>
<option>Processing</option>
<option>Rejected</option>
<option>Pending</option>
<option value="%%">All</option>
</select>  

Select Route Name :

<select name="Route_No">
<option></option>
<?php


$result = mysql_query("SELECT distinct(`Rout_No`) FROM `studentregistration` WHERE 1 ORDER BY `studentregistration`.`Rout_No` ASC;");
while($row = mysql_fetch_array($result))
	{
echo "<option>".$row[0]."</option>";
	}
	?>
<option value="%%">All</option>
</select>
:  
<input type="submit" name="edit" value="Show Me" />
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 

<?php   
}


?>
<center><A style="font-family:Calibri" HREF="javascript:window.print()">Print</A></center>
<?php include 'footer.php'?>