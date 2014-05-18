function checkme()
{
	var error = "";
	
	
	if(document.getElementById('pname').value == "")
	{
		error = "Please enter the parent's full name.\n";
	}
	
		
	if(document.getElementById('address').value == "")
	
	{
		error += "Please enter your full address.\n";
	}
	
	var user_phone = document.getElementById('phone').value;
	
	var reg_exp_phone = /^[2-9]\d{2}-\d{3}-\d{4}$/;
	
	var valid_phone = reg_exp_phone.test(user_phone);
	
	if(!valid_phone)
	{
		error += "Please enter a valid phone number.\n";
	}
	
	var user_phone = document.getElementById('ephone').value;
	
	var reg_exp_phone = /^[2-9]\d{2}-\d{3}-\d{4}$/;
	
	var valid_phone = reg_exp_phone.test(user_phone);
	
	if(!valid_phone)
	{
		error += "Please enter a valid emergency contact number.\n";
	}
	
	var user_email = document.getElementById('email').value;
	
	var reg_exp_email = /^([a-zA-Z0-9]+([\.+_-][a-zA-Z0-9]+)*)@(([a-zA-Z0-9]+((\.|[-]{1,2})[a-zA-Z0-9]+)*)\.[a-zA-Z]{2,6})$/;
	
	var valid_email = reg_exp_email.test(user_email);
	
	if(!valid_email)
	{
		error += "Please enter a valid email address.\n";
	}
	
	if(document.getElementById('cname1').value == "")
	{
		error += "Please enter the child's full name.\n";
	}
	
	if(document.getElementById('age1').value == "")
	{
		error += "Please enter the child's age.\n";
	}
	
	
	
	if(document.getElementById('hear_about_VBS').selectedIndex == 0)
	
	{
		error += "Please tell us how you heard about our VBS.\n";
	}
	
	
	//don't change this part
	if(error == "")
	{
		return true;
	
	}
	else alert(error);
	{
		return false;	
	}
}// JavaScript Document