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


<body >

  
  
  <h1>Delete Student Record With Enroll ID wise</h1>

  <p>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//***************

$Enroll_Id=addslashes($_POST['Enroll_Id']); 
// echo "<Br>".$Enroll_Id; 

mysql_query("DELETE FROM `studentregistration` WHERE `studentregistration`.`Enroll_Id` = '$Enroll_Id';") or die(mysql_error());
	
	// echo "<h2 style=\"font-family:Calibri\">Registration Success fully Completed Please click on <a href=\"StudentRegAck2.php\" target=\"_self\" >Home</a> </h2	>";
	
echo  "<br><h2 style=\"font-family:Calibri\">".$Enroll_Id." - Record Deleted Successfully  </h2	><br><br>";
	
include_once 'footer.php';

								
								 //header( 'Location: StudentRegAck2.php');
   }
   }
  ?>




 
