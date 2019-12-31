function ValidateForm(f)
{



if(Reg.Hall_Ticket_No.value=="")
{
alert("Hall_Ticket_No cannot Be Blank ");
Reg.Hall_Ticket_No.focus();
return false;
} 


if(Reg.Hall_Ticket_No.value.length!=10)
{
        alert("PleaseEnter Correct Hall_Ticket_No & Ex :  ");
        Reg.Hall_Ticket_No.focus();
        return false

}
    

 if(Reg.Hall_Ticket_No.value.charAt(3)=='o'|| Reg.Hall_Ticket_No.value.charAt(3)=='O' || Reg.Hall_Ticket_No.value.charAt(3)=='O')
 {
        alert("Enter zero value after N ");
        Reg.Hall_Ticket_No.focus();
        return false;
   
}





if(Reg.Name_Student.value=="")
{
alert("Name_Student cannot Be Blank ");
Reg.Name_Student.focus();
return false;
} 
if(Reg.Course.value=="")
{
alert("Course cannot Be Blank ");
Reg.Course.focus();
return false;
} 
if(Reg.Branch.value=="")
{
alert("Branch cannot Be Blank ");
Reg.Branch.focus();
return false;
} 
if(Reg.Academic_Year.value=="")
{
alert("Academic_Year cannot Be Blank ");
Reg.Academic_Year.focus();
return false;
} 
if(Reg.Parent_Name.value=="")
{
alert("Parent_Name cannot Be Blank ");
Reg.Parent_Name.focus();
return false;
} 
if(Reg.HouseNo.value=="")
{
alert("HouseNo cannot Be Blank ");
Reg.HouseNo.focus();
return false;
} 
if(Reg.Street_Village.value=="")
{
alert("Street_Village cannot Be Blank ");
Reg.Street_Village.focus();
return false;
} 
if(Reg.Mandal.value=="")
{
alert("Mandal cannot Be Blank ");
Reg.Mandal.focus();
return false;
} 
if(Reg.District.value=="")
{
alert("District cannot Be Blank ");
Reg.District.focus();
return false;
} 
if(Reg.State.value=="")
{
alert("State cannot Be Blank ");
Reg.State.focus();
return false;
} 
if(Reg.Pincode.value=="")
{
alert("Pincode cannot Be Blank ");
Reg.Pincode.focus();
return false;
} 
if(Reg.Email_Id.value=="")
{
alert("Email_Id cannot Be Blank ");
Reg.Email_Id.focus();
return false;
} 
if(Reg.Student_Phno.value=="")
{
alert("Student_Phno cannot Be Blank ");
Reg.Student_Phno.focus();
return false;
} 


if(Reg.Student_Phno.value.length < 10 || Reg.Student_Phno.value.length > 15|| Reg.Student_Phno.value.search(/[^0-9\-()+]/g) != -1 )
				{
				alert("Student_Phno Must be Greater Than 10 or 15 Digits and Phno Must be numeric value except(+,(),-)");
				Reg.Student_Phno.focus();
				Reg.Student_Phno.value.value="";
				return false;
}












if(Reg.Parent_Phno.value=="")
{
alert("Parent_Phno cannot Be Blank ");
Reg.Parent_Phno.focus();
return false;
} 





if(Reg.Parent_Phno.value.length < 10 || Reg.Parent_Phno.value.length > 15|| Reg.Parent_Phno.value.search(/[^0-9\-()+]/g) != -1 )
				{
				alert("Parent_Phno Must be Greater Than 10 or 15 Digits and Phno Must be numeric value except(+,(),-)");
				Reg.Parent_Phno.focus();
				Reg.Parent_Phno.value.value="";
				return false;
}






if(Reg.Rout_No.value=="")
{
alert("Rout_No cannot Be Blank ");
Reg.Rout_No.focus();
return false;
} 
if(Reg.Bus_Stage_Name.value=="")
{
alert("Bus_Stage_Name cannot Be Blank ");
Reg.Bus_Stage_Name.focus();
return false;
} 




if(Reg.Remarks1.value=="")
{
alert("Gender cannot Be Blank ");
Reg.Remarks1.focus();
return false;
} 



if(Reg.Remarks2.value=="")
{
alert("Name of the College cannot Be Blank ");
Reg.Remarks2.focus();
return false;




if(Reg.Blood_Group.value=="")
{
alert("Blood Group cannot Be Blank ");
Reg.Blood_Group.focus();
return false;
} 






} 


}
