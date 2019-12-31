<?php session_start(); ?>

  <? include_once 'dbsetting.php'?>
  <?php 

$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];

$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
if($row = mysql_fetch_array($result))
	{
	
	

	$htno  =  $_POST['htno'];
	
	
	
	
	
	$htnoar = explode("\n",$htno);
	
	
	
	
	
	//echo "<br>".$htnoar[0];
	foreach($htnoar as $key=>$value)
	{
	
	         $value = strtoupper(trim($value));
          // echo $value."qqq";
  	
	?>

<style type="text/css">
<!--
.Idstyle {
	font-size: 26px;
	font-weight: bold;
	font-family:Calibri
}
.style17 {
	color: #00CC66;
	font-weight: bold;
	font-family: Calibri;
	font-size: 24px;
}
.style25 {font-family: Calibri}
.style31 {
	font-size: 12px;
	font-weight: bold;
}
.style37 {font-size: 12px}
.style38 {font-size: 9px}
.style39 {
	color: #FF0000;
	font-weight: bold;
}
.style40 {color: #0000FF}


-->
</style>
<title>
Target Engineering College
</title>
<link rel="icon" href="index_files/logo.jpg" type="image/jpeg" />
<body >

  <?php 
$result12 = mysql_query("SELECT *  FROM `studentregistration` WHERE `Hall_Ticket_No` = '$value'");

while($idrow = mysql_fetch_array($result12))
	{
	?>
	<center>

<table width="363" height="201" border="0" >
<TR>

<TD width="363" height="197"  style="border:2px solid; border-radius:20px;">

<table width="363" height="191" >
  <tr>
    <td height="58" colspan="3"><img src="index_files/engclg.jpg" width="357" height="56" style="
    border-radius: 10px"></td>
  </tr>
  <tr>
    <td width="7" height="31"><span class="style25"></span></td>
    <td width="268"><p align="center" class="style17 style40">BUS PASS </p></td>
    <td width="74" rowspan="4"><div align="center"><img src="photos/<?php echo $idrow['Hall_Ticket_No']?>.jpg" width="67" height="79"><br>
        <img src="index_files/SIGN.jpg" width="66" height="21"></div></td>
  </tr>
  <tr>
    <td colspan="2"><p class="style25">Name : <strong><?php echo $idrow['Name_Student']?></strong></p></td>
  </tr>
  <tr>
    <td colspan="2"><p class="style25">Course:<strong> <?php echo $idrow['Course']?></strong> Branch:<strong> <?php echo $idrow['Branch']?></strong> </p></td>
  </tr>
  <tr>
    <td height="21" colspan="2"><p class="style25">Academic Year: <strong> <?php echo $idrow['Academic_Year']?></strong></p></td>
  </tr>
  <tr>
    <td height="21" colspan="2"><span class="style25">Hallticket No: <strong><?php echo $idrow['Hall_Ticket_No']?></strong></span></td>
    <td colspan="2"><div align="center" class="style31">Transport I/C </div></td>
  </tr>
</table></TD>


<td width="9">&nbsp;&nbsp;</td>



<TD width="363" height="197"  style="border:2px solid; border-radius:20px;">

<table width="363" height="175">
<tr>
<td>
<p align="left"><span class="style25"><span class="style37"> Parent Name:
        <?php echo $idrow['Parent_Name']; ?><br>
  Address: <em>H.NO:
  
   <?php 
   echo $idrow['HouseNo'].", ";
   echo $idrow['Street_Village'].", ";
   echo $idrow['Mandal'].", ";
   echo $idrow['District'].".";
  // echo $idrow['Pincode'].", ";
   
    ?>
  </em><br>Ph No:<?php echo $idrow['Student_Phno']; ?>, <?php echo $idrow['Parent_Phno']; ?></span><br>
  Route Name: <em>: <?php echo $idrow['Rout_No']; ?>, <?php echo $idrow['Bus_Stage_Name']; ?></em></span> <br>
  <span class="style38 style25">NOTE:  1)No student is allowed without Bus Pass.<br>
  2)  In case lose of bus pass fresh shall be issued on payment of rs. 150/-<br>
  3)  A fine of double the equivalent amount will be charged on causing any damage to  the bus<br>
  4)  During Exams/ special occasion/ special class/ early leaving of the college,  buses shall be travelling only on main route, student/parent shall not have any  right to ask to drop in their respective places.
  <br>5) On failure of showing  bus pass on board a fine of Rs 10/- per day will be imposed</span><br>
  <strong>College Codes:</strong> <span class="style39">CHTN|  CHTS|CHTP|CHTB</span>
  
  
  </td>
  </TR>
</table>
  </TR>
</table>


  
  
  
  
  



<?php 
}
}
}
?>
