<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" >
function checkvalues()
{
	var name=document.forms[0].name.value;
	var email=document.forms[0].email.value;
	var phone=document.forms[0].phone.value;
	var street=document.forms[0].street.value;
	var building=document.forms[0].building.value;
	var apartment=document.forms[0].apartment.value;
	var citys=document.forms[0].citys.value;

if ((name!=null && name!="") && (email!=null && email!="" )&& (phone!=null && phone!="") && (street!=null && street!="") &&( building!=null && building!="") && (apartment!=null && apartment!="") &&( citys!=null && citys!="" ))
{
	
	return true;
}
else
	{
		if (name==null || name=="")	
				document.forms[0].name.style.borderColor="#FF0000"		
		if (email==null || email=="")		
				document.getElementById('email').style.borderColor="#FF0000";
		if (phone==null || phone=="")	
				document.getElementById('phone').style.borderColor="#FF0000";
		if (street==null || street=="")		
				document.getElementById('street').style.borderColor="#FF0000";
		if (building==null || building=="")	
				document.getElementById('building').style.borderColor="#FF0000";
		if (apartment==null || apartment=="")		
				document.getElementById('apartment').style.borderColor="#FF0000";
				
		return false;
		
	}
		
}

</script>

<style>


select,input{
border-radius:4px;	
text-align:right;
border-color:#FFFF00;
padding-right:6px;
	}

</style>
</head>

<body background="imgs/2_ar.png"  style="width:810px;background-repeat:no-repeat">
<a href="index-ar.php" style="position:absolute; left: 24px; top: 17px; width: 79px; height: 31px;"> </a>

<form name"form" action="end-ar.php" method="post" onsubmit="return checkvalues()">
<input type="text" name="name" id="name" style="position:absolute; left: 262px; top: 265px; height: 28px; width: 263px;" />
<input type="email" name="email" id="email" style="position:absolute; left: 262px; top: 312px; height: 28px; width: 263px;" />
<input type="tel" name="phone" id="phone" style="position:absolute; left: 262px; top: 359px; height: 28px; width: 263px;" />
<input type="text" name="street" id="street" style="position:absolute; left: 262px; top: 408px; height: 28px; width: 263px;" />
<input type="text" name="building" id="building" style="position:absolute; left: 262px; top: 452px; height: 28px; width: 263px;" />
<input type="text" name="apartment" id="apartment" style="position:absolute; left: 262px; top: 502px; height: 28px; width: 263px;" />
<select name="citys" id="citys" style="padding-right:0px;position:absolute; left: 262px; top: 552px; height: 28px; width: 270px;">
<?php include'list.php' ?>
</select>
<input type="submit"id="submitbutton" style="text-align:center; background:rgb(0,90,171); border-radius:5px; color:rgb(255,255,0);border:hidden; font-size:22px; position:absolute; left: 350px; top: 605px; width: 113px; height: 35px;" value="Submit" name="Submit" />
</form>
</body>
</html>