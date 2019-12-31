

<?php include 'header.php'?>

<?php include 'menu.php'?>
<?php include 'dbsetting.php'?>
<style type="text/css">
<!--
.style1 {font-size: }
-->
.inputbox{
	width:16%;
}
.h1font{
	font-size:16px;
}
.bottom{
	margin-bottom:20px;
}
</style>
</head>

<body background="StudentRegistration_files/background.jpg" >
<div align="center" class="style1">
<h1>Student Login Details</h1>
<form method="post">

   <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{


$userid=strtoupper(addslashes($_POST['userid'])); 
$password=addslashes($_POST['password']); 
//echo $userid;
//echo $password;


$result = mysql_query("SELECT * FROM `studentregistration` WHERE `Hall_Ticket_No`='$userid' and `Parent_Phno`='$password'") or die(mysql_error());


if($row = mysql_fetch_array($result))
	{
	$psw=$row['password'];
	
session_start();
$_SESSION['username']= $userid; 
$_SESSION['password']= $password; 


if($psw==$userid)
	 header( 'Location: Changepassword.php');
	 else
	 header( 'Location: RegAck.php');

//echo '<a href="2.php">go to file2</a>'; 
}
else
{
echo "  <h2>Your Details wrong Please re Enter</h3>";
}
}
?> 

 <div class="row bottom">
  <div class="col-sm-6">
  <strong><h1 class="h1font">Parent Phno :</h1> </strong>
  </div>
 <div class="inputbox">
 <input type="number" min="4999999999" max="9999999999" name="password" class="form-control"  placeholder="Parent PhoneNumber" required>
</div>
</div>



 <div class="row bottom">
  <div class="col-sm-6">
  
  <strong><h1 class="h1font">HallTicket No : </h1></strong>
  </div>
  <div class="inputbox">
  <input name="userid" size="" type="text"  class="form-control"  placeholder="Student Htno" required></td>
</div>
</div>

 <div class="row">
  <div style="margin:0 auto">
<input type="submit"  class="form-control btn-primary"  />
</div>
</div>
 </form>
  

  
</div>
</body>
</html>
<?php include 'footer.php'?>