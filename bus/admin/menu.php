
<!-- Link the CSS file here -->

<style type="text/css" media="screen,projection">@charset "utf-8";


body {
	background-color: #FFFFFF;

/* for pull-down menu to work in IE6*/

}

/* pull-down mainmenu css */
.mainmenu{
	
	width:;
	padding: 0 ;
	/*	margin: 0 0 1em 0;*/
}
.mainmenu ul {
	float: left;
	width: auto;
	list-style: none;
	line-height: 0;
	color:#FFFF00;
	background: #3E66C6;/*#8080FF*/
	padding: 0;
	margin: 0 0 0.8px 0;/***********************************************************table touching border888888888888888888888888888888888888888888/*/
}

.mainmenu a, .mainmenu a:visited {
	display: block;
	font-family:Calibri; font-size: 15px;font-style:normal; text-decoration:underline;
/*font-family:Arial, Helvetica, sans-serif;font-size:0.8em;font-weight:bold;font-style:normal;text-decoration:underline;*/
	color: #FFFF00;
	text-decoration: none;
	padding: 1em 1em;
}
.mainmenu ul ul a{
	width: auto;
	height: auto;
}
.mainmenu ul a{
	width: auto;
}


.mainmenu li  {
	float: left;
	margin:0;
	padding:0;
}

.mainmenu ul li {float:left; position:relative;  }
.mainmenu ul li a {white-space:nowrap;}
	
.mainmenu li ul {
	position: absolute;
	left: -999em;
	height: auto;
	width:auto;	
	
	background:#3E66C6; /*#8080FF;*/
	font-weight: normal;
	border-width: 0px;
	margin: 0;
}

.mainmenu li li {
	width:15em ;
}

.mainmenu li li a{
	width:10em ;
}

.mainmenu li ul  {
	margin: 0;
}
.mainmenu li ul ul {
	margin: -2.8em 0 0 13.5em;
}
.ul_ch, 
.mainmenu li:hover ul ul,
.mainmenu li li:hover ul ul,
.mainmenu li li li:hover ul ul,
.mainmenu li li li li:hover ul ul,
.mainmenu li li li li li:hover ul ul
{
	left: -999em;
}
.mainmenu li:hover ul,
.mainmenu li li:hover ul,
.mainmenu li li li:hover ul,
.mainmenu li li li li:hover ul,
.mainmenu li li li li li:hover ul
{
	left: auto;
}
.mainmenu li:hover>ul.ul_ch   
{
	left: auto;
}

.mainmenu li:hover{
	background: #0000FF;
}

.mainmenu li:hover a,.mainmenu li:hover a:visited,.mainmenu li:hover a:hover,.mainmenu li a:hover{
	color:#FFFF00;
}
.mainmenu li:hover li a, .mainmenu li li:hover li a, 
.mainmenu li li li:hover li a, .mainmenu li li li li:hover li a,
.mainmenu li:hover li a:visited, .mainmenu li li:hover li a:visited, 
.mainmenu li li li:hover li a:visited, .mainmenu li li li li:hover li a:visited
{
	color:#FFFF00;
}
.mainmenu li li:hover, .mainmenu li li li:hover, 
.mainmenu li li li li:hover , .mainmenu li li li li li:hover , .mainmenu li li li li li li:hover 
{
	background: #B90000;
	z-index:9999;
}
.mainmenu li li:hover a,.mainmenu li li li:hover a, 
.mainmenu li li li li:hover a, .mainmenu li li li li li:hover a
{
	color: #FFFF00; 
}

.mainmenu ul ul a, .mainmenu ul ul a:visited,
.mainmenu li li a, .mainmenu li li a:visited
{
	color: #FFFF00;
}
.mainmenu ul ul a:hover,
.mainmenu li:hover li:hover a,.mainmenu li:hover li:hover a:visited ,
.mainmenu li:hover li:hover li:hover a,.mainmenu li:hover li:hover li:hover a:visited,
.mainmenu li:hover li:hover li:hover li:hover a,.mainmenu li:hover li:hover li:hover li:hover a:visited ,
.mainmenu li:hover li:hover li:hover li:hover li:hover a,.mainmenu li:hover li:hover li:hover li:hover li:hover a:visited,
.mainmenu li:hover li:hover li:hover li:hover li:hover li:hover a,.mainmenu li:hover li:hover li:hover li:hover li:hover li:hover a:visited{
	color: #FFFF00;
}
.mainmenu li:hover li:hover li a,.mainmenu li:hover li:hover li a:visited ,
.mainmenu li:hover li:hover li:hover li a,.mainmenu li:hover li:hover li:hover li a:visited,
.mainmenu li:hover li:hover li:hover li:hover li a,.mainmenu li:hover li:hover li:hover li:hover li a:visited,
.mainmenu li:hover li:hover li:hover li:hover li:hover li a,.mainmenu li:hover li:hover li:hover li:hover li:hover li a:visited{
	color: #FFFF00;
}


/* end of mainmenu css */



</style>




<table border="0" width="">
 <tr align="center">
 <td>
<!-- PULL DOWN MENU - BEGIN -->
 
<div class="mainmenu">
 
 
<ul>
      <li class="li_nc"><a href="2.php" target="_self" >Home</a></li>
      
	  
      <li class="li_hc"><a href="#" target="_self" >Registration Details</a><ul class="ul_ch">
	  	  
            <li class="li_nc"><a href="StudentRegistrationpage2.php" target="_self" >Add Student</a></li>
		  <li class="li_nc"><a href="DeleteEnrollwise1.php" target="_self" >Delete Enroll Id wise</a></li>
		  
           <li class="li_nc"><a href="NamewiseSeacrh.php" target="_self" >Name wise Seacrh</a></li>
	   <li class="li_nc"><a href="RegistrationAll.php" target="_self" >All Registration</a></li>
	      <li class="li_nc"><a href="studentdetailshtnowise.php" target="_self" >Htno wise</a></li>

		  <li class="li_nc"><a href="FormSubmissionDetails.php" target="_self" >FormSubmissionDetails</a></li>
		  		  <li class="li_nc"><a href="SubmittedStudents.php" target="_self" >Photo Upload Verification</a></li>
				  
				  
				 <li class="li_nc"><a href="upload.php" target="_self" >Photo Upload</a></li>
				 
				        

      </ul></li>
	  

	  
	    
		   
		  
	     <li class="li_hc"><a href="#" target="_self" >Reports</a><ul class="ul_ch">
	      <li class="li_nc"><a href="college_wise.php" target="_self" >College Wise</a></li>
				   <li class="li_nc"><a href="idcardgenarate.php" target="_self" >Generate ID Card</a></li>
				   	   <li class="li_nc"><a href="id_mul.php" target="_blank" >Generate Missing ID Cards</a></li>

	    <li class="li_nc"><a href="Route_Wise_List.php" target="_self" >Route Wise</a></li>
		   		   <li class="li_nc"><a href="Route_Wise_List_Enroll.php"  target="_blank" >Route Wise Nominal Roll</a></li>
		  
	       </ul></li>
		   
		   	   
		   
		   <li class="li_hc"><a href="permissions1.php" target="_self" >Permissions</a><ul class="ul_ch">
	    <li class="li_nc"><a href="permissions1.php" target="_self" >Permissions</a></li>

				       </ul></li>
	  
	  
	  
	  
      <li class="li_nc"><a href="Changepassword.php" target="_self" >ChangePassword</a></li>
      <li class="li_nc"><a href="logout.php" target="_self" >Logout</a></li>
</ul>
 
 
</div>

 </td></tr></table>