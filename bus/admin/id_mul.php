
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

  <? include_once 'menu.php'?>
  <center>
<script language="javaScript" type="text/javascript" src="htnovalid.js"></script>

<form action="id2.php"  method="post" name="Reg" onSubmit="return ValidateForm(this)">

<h2>Enter the missing hallticket no or copy paste from excel file</h2>

<b>Hall Ticket Number</b>  <br/>
<textarea name="htno" cols="15" rows="15"></textarea><br /><br />
<input type="submit" name="edit"/>
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 

</form> 


</center>




<?php
}

?>





<? include_once 'footer.php'?>