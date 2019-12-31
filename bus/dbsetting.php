

<?php

$con = mysql_connect("127.0.0.1","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

  else

 // echo "SQl connection ok";



// some code



mysql_select_db("bbbnclb_busreg", $con);

?> 
