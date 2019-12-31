<? session_start(); include_once 'header.php'?>
  <style>
 
 td{font-family:Calibri}
 
 </style>
 


 <style>
 
 td{font-family:Calibri}
 .st1{font-family:Calibri; font-size:28px; color:#0000CC}
 table, th, td
{
border-collapse:collapse;
}
 
 </style>

<? include_once 'dbsetting.php'?>

<hr width="1000" />

  <?php include_once 'menu.php'?>
  
  
  <h1>Upload Students Photos with Htno</h1>
<?php
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$curdate = "20".date('y-m-d H:i:s');
//echo $curdate;
?>

<?php 
$userid= $_SESSION['username'];
$password= $_SESSION['password'];
$fid= $_SESSION['fid'];

$result = mysql_query("SELECT * FROM adminlogin WHERE `facid` = 'BusAdmin' AND `userid` = 'BusAdmin' AND `password` ='$password';");

if($row = mysql_fetch_array($result))
	{

/*
By using this script you will be able to upload as many files as you want.
The code will check if file existes, limited extensions, file size, file selected ..etc.
For Q. E-mail/MSN: m(at)maaking.com.
*/

//upload directory.
//change to fit your need eg. files, upload .... etc.


$upload_dir = "photos/";
//number of files to upload.
$num_files = 5;
//the file size in bytes.
$size_bytes =2560000; //51200 bytes = 50KB.
//Extensions you want files uploaded limited to.
$limitedext = array(".jpg");


   //check if the directory exists or not.
   if (!is_dir("$upload_dir")) {
      die ("Error: The directory <b>($upload_dir)</b> doesn't exist");
   }
   //check if the directory is writable.
   if (!is_writeable("$upload_dir")){
      die ("Error: The directory <b>($upload_dir)</b> is NOT writable, Please CHMOD (777)");
   }


//if the form has been submitted, then do the upload process
//infact, if you clicked on (Upload Now!) button.
if (isset($_POST['upload_form'])){

       echo "<h3>Upload results:</h3>";

       //do a loop for uploading files based on ($num_files) number of files.
       for ($i = 1; $i <= $num_files; $i++) {

           //define variables to hold the values.
           $new_file = $_FILES['file'.$i];
		
		//   $filetype_new = $_POST['filetype'.$i];
		 //  echo $filetype_new;
		//   $title1 = $_POST['title1'.$i];
		   //echo $title1;
           $file_namear1 =$new_file['name'];
		   echo  $file_namear1;
		   $file_namear2 = explode(".", $file_namear1);
		   echo $file_namear2[0];
		   
		   
		   
           //to remove spaces from file name we have to replace it with "_".
           $file_name = strtoupper($file_namear2[0]).".jpg";
           $file_tmp = $new_file['tmp_name'];
           $file_size = $new_file['size'];

           #-----------------------------------------------------------#
           # this code will check if the files was selected or not.    #
           #-----------------------------------------------------------#

           if (!is_uploaded_file($file_tmp)) {
              //print error message and file number.
              echo "File $i: Not selected.<br>";
           }else{
                 #-----------------------------------------------------------#
                 # this code will check file extension                       #
                 #-----------------------------------------------------------#

                 $ext = strrchr($file_name,'.');
                 if (!in_array(strtolower($ext),$limitedext)) {
                    echo "File $i: ($file_name) Wrong file extension. <br>";
                 }else{
                       #-----------------------------------------------------------#
                       # this code will check file size is correct                 #
                       #-----------------------------------------------------------#

                       if ($file_size > $size_bytes){
                           echo "File $i: ($file_name) Faild to upload. File must be <b>". $size_bytes / 2048 ."</b> KB. <br>";
                       }else{
                             #-----------------------------------------------------------#
                             # this code check if file is Already EXISTS.                #
                             #-----------------------------------------------------------#

                             if(file_exists($upload_dir.$file_name)){
							    move_uploaded_file($file_tmp,$upload_dir.$file_name);
                                 echo "File $i: ($file_name) Uploaded<br>";
                             }else{
                                   #-----------------------------------------------------------#
                                   # this function will upload the files.  :) ;) cool          #
                                   #-----------------------------------------------------------#
                                   if (move_uploaded_file($file_tmp,$upload_dir.$file_name)) {
                                       echo "File $i: ($file_name) Uploaded.<br>";
 							   
                                   }else{
                                        echo "File $i: Faild to upload.<br>";
                                   }#end of (move_uploaded_file).

                             }#end of (file_exists).

                       }#end of (file_size).

                 }#end of (limitedext).

           }#end of (!is_uploaded_file).

       }#end of (for loop).
       # print back button.
       echo "<a href=upload.php><h2>Back</h2></a>";
////////////////////////////////////////////////////////////////////////////////
//else if the form didn't submitted then show it.
}else{
    echo "<script language=\"javaScript\" type=\"text/javascript\" src=\"valid.js\"></script>";
    echo " <h3>File Must with Students Hallticket Only <br>Select file to upload! Only Following Formats<br>(.jpg)<br>Maximum File Size less than ". $size_bytes / 2048 ." KB</h3>";
    echo "<table border=1> <form name=\"Reg\" method=\"post\" action=\"$_SERVER[PHP_SELF]\" enctype=\"multipart/form-data\" onSubmit=\"return ValidateForm(this)\">";
           // show the file input field based on($num_files).
           for ($i = 1; $i <= $num_files; $i++) {
               echo "<tr><td><strong>Upload File:</strong></td><td> <input size=70 type=\"file\" name=\"file". $i ."\"></td></tr>";
			   
			  
			
           }
		   	echo "</table>";
            		   	echo "<br>";
                        echo "<br>";
    echo " <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$size_bytes\">
           <input type=\"submit\" name=\"upload_form\" value=\"Upload Now!\">
           </form>";
           echo "<br>";
           echo "<br>";
}

//print copyright ;-)

}

?>
<? include_once 'footer.php'?>