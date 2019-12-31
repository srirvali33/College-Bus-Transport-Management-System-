<?PHP  session_start();
 include_once 'header.php'?>
<? include_once 'dbsetting.php'?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
-->
</style>

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


  <style>
 
 td{font-family:Calibri}
 .bttn
{
  width: 100px;
  text-align: center;
  margin-left:150;

}
 
 </style>
 


 <style>
 
 td{font-family:Calibri}
 .st1{font-family:Calibri; font-size:28px; color:#0000CC}
 table, th, td
{
border-collapse:collapse;
}
 
 </style>
 
 
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
	 $( "#datepicker1" ).datepicker();
  });
  </script>
 
 
 
 
 
 
 
 
 <form id="foo55" name="Reg" method="post" action="" onSubmit="return ValidateForm(this)">
   
   
   <?php
   $result6 = mysql_query("SELECT * FROM `permissions` WHERE 1;");
while($row6 = mysql_fetch_array($result6))
{


$sdatearry2=explode("-",$row6['1']);
$sdate = $sdatearry2[2]."-".$sdatearry2[1]."-".$sdatearry2[0];
$sfrmdate=$sdatearry2[1]."/".$sdatearry2[2]."/".$sdatearry2[0];
$edatearry2=explode("-",$row6['2']);
$edate = $edatearry2[2]."-".$edatearry2[1]."-".$edatearry2[0];
$efrmdate=$edatearry2[1]."/".$edatearry2[2]."/".$edatearry2[0];
$message =$row6['message'];
//echo $message;

echo "<h3>Previous Registration available dates between <br> ".$sdate." &amp; ".$edate."</h3>"; 
   
   }
   
   ?>
    <span class="style3">
  <span class="style1">Update New Registration  available dates between</span></span>
  <br>  <br>  <br>
   
  <table border="0">
<tr>
         
   <td> 
   
 <td>

   
   <strong>Select the dates </strong>: 
  <input type="text" name="DATE1" id="datepicker1" value="<?php echo $efrmdate; ?>"  />
<strong> between</strong>

<input type="text" name="DATE2" id="datepicker" value="<?php echo $sfrmdate; ?>" />
<br />Type Message Here : 

<textarea name="msg" cols="25" rows="4"><?php echo $message;?> </textarea>
   <br />
      <input class="bttn" type="submit" name="dayatten" margin:"0 auto" />
   
   
   </td>
   
   
   </td>
   
   </tr>
   </table>
   

</form>
   
   

   <?php
if (isset($_REQUEST['dayatten'])) {

$sdatearry1=addslashes($_POST['DATE1']);  
$sdatearry2=explode("/",$sdatearry1);


$sdate = $sdatearry2[2]."-".$sdatearry2[0]."-".$sdatearry2[1];
$sdate1 = $sdatearry2[2]."-".$sdatearry2[0]."-".$sdatearry2[1];
//echo $sdate1;

$edatearry1=addslashes($_POST['DATE2']);  
$edatearry2=explode("/",$edatearry1);


$edate = $edatearry2[2]."-".$edatearry2[0]."-".$edatearry2[1];
$edate1 = $edatearry2[2]."-".$edatearry2[0]."-".$edatearry2[1];
//echo $sdate1; 

$msg=addslashes($_POST['msg']);  
echo $msg;


mysql_query("UPDATE `permissions` SET `seditdate` = '$sdate', `eeditdate` = '$edate', `message` = '$msg' WHERE `permissions`.`id` = 1;;") or die(mysql_error());




$result = mysql_query("SELECT * FROM `permissions` WHERE 1;");
while($row = mysql_fetch_array($result))
{


$sdatearry2=explode("-",$row['1']);
$sdate = $sdatearry2[2]."-".$sdatearry2[1]."-".$sdatearry2[0];
$edatearry2=explode("-",$row['2']);
$edate = $edatearry2[2]."-".$edatearry2[1]."-".$edatearry2[0];

echo "<h3>Registration  available date between-----------) ".$sdate." &amp; ".$edate."</h3>"; 
   
   }
   
   
   
   
   }
   
   
?>

         <!---------- Update Student Data----------->
 <?  } include_once 'footer.php'?>
 