<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function move(){
	if (document.getElementById('yes').checked)	
		 window.location.href = 'fields.php?a=y';
	else if (document.getElementById('no').checked)	
		 window.location.href = 'fields.php?a=n';
	}
</script>
</head>

<body background="imgs/1_en.png"  style="width:810px;background-repeat:no-repeat">
<input type="radio" name="option" id="yes" style="position:absolute; left: 89px; top: 333px;" checked="checked"/>
<input type="radio" name="option" id="no" style="position:absolute; left: 244px; top: 333px" />
<a href="index-ar.php" style="position:absolute; left: 734px; top: 22px; width: 61px; height: 31px;"> </a>


<input type="button" style="background:rgb(0,90,171); border-radius:5px; color:rgb(255,255,0);border:hidden; font-size:22px; position:absolute; left: 350px; top: 420px; width: 113px; height: 35px;" value="Submit" name="Submit" onclick="move()"/>
</body>
</html>