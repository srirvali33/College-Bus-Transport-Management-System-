<?php include_once 'dbsetting.php'?>
<?php include_once 'header.php'?>
<?php include_once 'menu.php'?>


 
 <div class="container">



<script language="javaScript" type="text/javascript" src="validation.js"></script>


<form action="StuReg.php"method="post" name="Reg" onSubmit="return ValidateForm(this)">

<h2>Buspass Registration form</h2>

<input name="Enroll_Id" class="Enroll_Id" size="" type="HIDDEN">










 



<div class="form-group">
    <label for="Hall_Ticket_No">Hall Ticket No: </label>
    <input type="text" name="Hall_Ticket_No" class="form-control"  placeholder="Hall Ticket No" required>
  </div>





 



<div class="form-group">
    <label for="Name_Student">Student Name: </label>
    <input type="text" name="Name_Student" class="form-control"  placeholder="Name Student" required>
  </div>



<div class="form-group">
    <label for="Rout_No">Route Name: </label>
	<SELECT name="Rout_No" size="" type="text" class="form-control">
		<option> </option> 
<?php

$result12 = mysql_query("SELECT DISTINCT(BusrouteNames) FROM `busroutes`ORDER BY `busroutes`.`BusrouteNames` , `BusrouteNumbers` ASC");

while($row12 = mysql_fetch_array($result12))                                         
{
	
?>

		<option value="<?php echo $row12['BusrouteNames']; ?>"><?php echo $row12['BusrouteNames']; ?> </option> 


<?php


}



?>
	<option>Other</option> 
</SELECT>
  
  </div>





 



<div class="form-group">
    <label for="Bus_Stage_Name">Bus Stage Name: </label>
      <input type="text" name="Bus_Stage_Name" class="form-control"  placeholder="Bus_Stage_Name" required>
  </div>



<div class="form-group">
    <label for="Date_of_Birth">Date of Birth: (mm/dd/yyyy) </label>
    <input type="date" name="Date_of_Birth" class="form-control"  placeholder="Date of Birth" required>
  </div>
 


<div class="form-group">
    <label for="Remarks1">Gender </label>
    <select name="Remarks1" class="form-control" required>
     <option></option>
	 <option>Male</option>
      <option>Female</option>
	</select>
  </div>




 



<div class="form-group">
    <label for="Remarks2">Select College </label>
	<select name="Remarks2" class="form-control" placeholder="college name" required>
	<option></option>
	<option VALUE="CHTN">TARN-1</option>
	 <option VALUE="CHTS">TARS-2</option>
       <option VALUE="CHTP">TARP-3</option>
        <option VALUE="CHTB">TARB-4</option>
         <option VALUE="SCDC">SCDC-5</option>
       <option VALUE="SCPG">SCPG-6</option>
	    <option VALUE="SCJCB">SCJC-BOYS</option>
		 <option VALUE="SCJCG">SCJC-GIRLS</option>
	</select>
   
  </div>



<div class="form-group">
    <label for="Course">Course: </label>
    <select name="Course" class="form-control" required>
<option></option>
	<option>B.Tech</option>
	<option>B.Pharmacy</option>
	<option>MBA</option>
	<option>MCA</option>
	<option>M.Tech</option>
	</select>
	


  </div>





 



<div class="form-group">
    <label for="Branch" width="100%">Branch: </label>

	<SELECT name="Branch" class="form-control" required>
		<option></option>
	<option>CIVIL</option>
      <option>CSE</option>
       <option>ECE</option>
      <option>EEE</option>
      <option>MECH</option>
      <option>MBA</option>
      <option>MCA</option>
	  <option>B.Pharmacy</option>
	  <option>Pharm D</option>
	<option>INTERMEDIATE</option>
     	
	</SELECT>
	
    
  </div>





 



<div class="form-group">
        
    <label for="Year">Year: </label>

    <select name="Year" class="form-control" required>
     <option></option>
	<option>1st Year</option>

    <option>2nd Year</option>

    <option>3rd Year</option>

    <option>4th Year</option>
	</select>
	
	
    
  
    
  </div>





 



<div class="form-group">
    <label for="Academic_Year">Academic Year: </label>

	
    <input type="text" name="Academic_Year" class="form-control" value="2019-20" readonly=""  placeholder="Academic Year" required>
  </div>





 



<div class="form-group">
    <label for="Parent_Name">Parent Name: </label>
    <input type="text" name="Parent_Name" class="form-control"  placeholder="Parent Name" required>
  </div>





 



<div class="form-group">
    <label for="HouseNo">HouseNo: </label>
    <input type="text" name="HouseNo" class="form-control"  placeholder="HouseNo" required>
  </div>





 



<div class="form-group">
    <label for="Street_Village">Street Village: </label>
    <input type="text" name="Street_Village" class="form-control"  placeholder="Street Village" required>
  </div>





 



<div class="form-group">
    <label for="Mandal">Mandal: </label>
    <input type="text" name="Mandal" class="form-control"  placeholder="Mandal" required>
  </div>





 



<div class="form-group">
    <label for="District">District: </label>
	<select name="District" class="form-control" required>
<option></option>
	<option>Karimnagar</option>
	<option>Adilabad</option>
<option>Kothagudem</option>
<option>Hyderabad</option>
<option>Jagtial</option>
<option>Jangaon</option>
<option>Gadwal</option>
<option>Kamareddy</option>
<option>Karimnagar</option>
<option>Khammam</option>
<option>Kumuram Bheem</option>
<option>Mahabubabad</option>
<option>Mahabubnagar</option>
<option>Mancherial</option>
<option>Medak</option>
<option>Medchal</option>
<option>Mulugu</option>
<option>Nagarkurnool</option>
<option>Nalgonda</option>
<option>Narayanpet</option>
<option>Nirmal</option>
<option>Nizamabad</option>
<option>Rangareddy</option>
<option>Sangareddy</option>
<option>Siddipet</option>
<option>Suryapet</option>
<option>Vikarabad</option>
<option>Warangal (Rural)</option>
<option>Warangal (Urban)</option>



	</select>
    
  </div>





 



<div class="form-group">
    <label for="State">State: </label>
   <select name="State" class="form-control" required>
	<option>Telangana</option>
	</select>	
  </div>





 



<div class="form-group">
    <label for="Pincode">Pincode: </label>
    <input type="number" name="Pincode" class="form-control"  placeholder="Pincode" required>
  </div>





 



<div class="form-group">
    <label for="Email_Id">Email Id: </label>
    <input type="email" pattern="[^ @]*@[^ @]*" name="Email_Id" class="form-control"  placeholder="Email Id" required>
  </div>





 



<div class="form-group">
    <label for="Student_Phno">Student Phno: </label>
    <input type="number" min="5999999999" max="9999999999" name="Student_Phno" class="form-control"  placeholder="Student Phno" required>
  </div>





 



<div class="form-group">
    <label for="Parent_Phno">Parent Phno: </label>
    <input type="number" min="5999999999" max="9999999999" name="Parent_Phno" class="form-control"  placeholder="Parent Phno" required>
  </div>





 







 



<div class="form-group">
    <label for="Blood_Group">Blood Group: </label>
    
  
     <select name="Blood_Group" class="form-control" required>
	<OPTION></OPTION>
<OPTION VALUE="A +VE">A +VE</OPTION>
<OPTION VALUE="A -VE">A -VE</OPTION>
<OPTION VALUE="B +VE">B +VE</OPTION>
<OPTION VALUE="B -VE">B -VE</OPTION>
<OPTION VALUE="O +VE">O +VE</OPTION>
<OPTION VALUE="O -VE">O -VE</OPTION>
<OPTION VALUE="AB +VE">AB +VE</OPTION>
<OPTION VALUE="AB -VE">AB -VE</OPTION>
<OPTION VALUE="Don't Know">Don't Know</OPTION>
	</select>
	
  </div>





 

    <input type="hidden" name="Account_Status" class="form-control"  placeholder="Account Status" >






 




    <input type="hidden" name="Bus_Fee" class="form-control"  placeholder="Bus Fee" >
 





 



    <input type="hidden" name="Date_of_Registration" class="form-control"  placeholder="Date of Registration">
 





 


    <input type="hidden" name="ip_Address" class="form-control"  placeholder="ip Address">






 








 






 




    <input type="hidden" name="Remarks3" class="form-control"  placeholder="Remarks3">






 


    <input type="hidden" name="Remarks4" class="form-control"  placeholder="Remarks4">
 





 




    <input type="hidden" name="Remarks5" class="form-control"  placeholder="Remarks5">





 


<div class="form-group">
    <label for="Aadhar Number">Social Security Number</label>


    <input type="number" name="Remarks6" class="form-control"  placeholder="Aadhar No">
</div>
  



  <center><input name="submit" type="submit" class="form-control btn-success" value="Submit"></center>

  <hr>

  
</form>
</div>
 










