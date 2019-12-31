


<?php ob_start();?>


<?php include_once 'header.php'?>













<?php include_once 'dbsetting.php'?>


<form action="" method=post>

 <p>
   <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{


$userid=addslashes($_POST['userid']); 
$password=addslashes($_POST['password']); 
$fid=addslashes($_POST['fid']); 
//$_SESSION['username']= $userid; 
//$result = mysql_query("SELECT * FROM login WHERE `facid` = '$userid' AND `userid` = '$password' AND `password` = '$fid';");

$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
//$result = mysql_query("SELECT * FROM login WHERE `facid` = '$userid' AND `userid` = '$userid'and `password`='$password'");


if($row = mysql_fetch_array($result))
	{
session_start();
$_SESSION['username']= $userid; 
$_SESSION['password']= $password; 
$_SESSION['fid']= $fid; 

?>

<script>
window.location = "2.php";
</script>


<?php
	// header( 'Location: 2.php');
//echo '<a href="2.php">go to file2</a>'; 
}
else
{
echo "  <h2>Your Details wrong Please re Enter</h3>";
}
}
?> 
 </p>
 <table width="200" border="0">
   <tr>
     <td><img src="index_files/Collegebus.jpg" width="300" height="200" /></td>
     <td><table width="300" border="0">
 <tr>
         <td>Faculty ID:</td>
         <td><select name="fid">
            
             <option>BusAdmin

             </option>
         </select></td>
       </tr> 
       <tr> 
         <td>Username</td>
         <td><input type="text" name="userid" /></td>
       </tr>
       <tr>
         <td>Password</td>
         <td><input type="password" name="password" /></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td><input name="submit" type="submit" /></td>
       </tr>
     </table></td>
   </tr>
 </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <BR>
  <BR>
  <BR>
</form>





<? include_once 'footer.php'?>