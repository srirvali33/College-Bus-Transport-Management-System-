<? session_start(); include_once 'header.php'?>
<? include_once 'dbsetting.php'?>
<hr width="1000" />


<?php 
$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];
$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
if($row = mysql_fetch_array($result))
	{
?>

</h1>
<!---************************** Session Starts ********************************************************-->

<?php include_once 'menu.php'?>


<table border="1" width="600" height="25" >
  <tr>
    <td width="16" height="28" align="center" valign="top">
	
      <p>
        <?php  echo "<img src=index_files/admin.jpg height='180' width='170'>"; ?><br /><br/>
		

      </p>
 </td>
    <td width="485" align="left" valign="top">
     



	
	<h3 style="font-family: Calibri;">WelCome <?php  
	echo "<font color=blue>".$fid."</font> <br>You can add student details,accept or reject applications.<br> You can also check other details if needed.</h3>" ?> 
	

	
  
    </table></td>
  </tr>
</table>
</form>
  <? } include_once 'footer.php'?>
