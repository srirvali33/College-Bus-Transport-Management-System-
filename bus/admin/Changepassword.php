<? session_start();  include_once 'header.php'?>
<hr width="1000" />

<? include_once 'menu.php'?>
  <? include_once 'dbsetting.php'?>
  <?php 

$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];





$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");
if($row = mysql_fetch_array($result))
	{
	
?>





<p><strong style="font-family:Verdana, Arial, Helvetica, sans-serif; font-family:10pt">Choose the following Options 
</strong>
<p>


<?php

if (isset($_POST['submit'])) {
// Handle the form.

require_once ('dbsetting.php');
// Connect to the db.


 

 
// Check for an existing password.
if (empty($_POST['password'])) {
$pa = FALSE;
echo '<p>Enter your existing password!</p>';
} else {
//$oldpw = $_POST['password'];
if ($_POST['password'] == $password) {
$pa = $_POST['password1'];
} else {
$pa = FALSE;
echo '<p>Your old password did not match the confirmed new password!</p>';
}

}

// Check for a password and match against the confirmed password.
if (empty($_POST['password1'])) {
$npa = FALSE;
echo '<p>Enter your new password!</p>';
} else {
if ($_POST['password1'] == $_POST['password2']) {
$npa = $_POST['password1'];
} else {
$npa = FALSE;
echo '<p>Your new password did not match the confirmed new password!</p>';
}
}

if ($pa && $npa) { // If everything's OK.


// Make the query.
$query = "update adminlogin set password='$npa' where facid='$fid'";
$result = @mysql_query ($query); // Run the query.
if (mysql_affected_rows() == 1) { // If it ran OK.

// Send an email, if desired.
echo '<p><b>Your password has been changed.</b></p>';

session_destroy();
?><a href="logout.php"><h2>LogOut</h2></a>
<?php
echo 'Please Relogin Security Purpose';

exit(); // Quit the script.

} 
 else {
$message = '<p> password do not match our records.</p>';
}
mysql_close(); // Close the database connection.

} else {
echo '<p>Please try again.</p>';
}

} // End of the main Submit conditional.

// Print the error message if there is one.
if (isset($message)) {
echo '<font color="red">', $message, '</font>';
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<h2 align="center">Enter your information in the form below</h2>
<table border="0">
<tr>
<td><b>Current Password</b> </td><td>:<input type="password" name="password" size="20" maxlength="20" /></td></tr>

<td><b>New Password</b> </td><td>:<input type="password" name="password1" size="20" maxlength="20" /></td></tr>

<td><b>Confirm New Password</b> </td><td>:<input type="password" name="password2" size="20" maxlength="20" /></td></tr>
</table>
<br /><br />
<div align="center"><input type="submit" name="submit" value="Change My Password" /></div>

</form> 









<?php
	}

	?>
          <? include_once 'footer.php'?>
