<!DOCTYPE html>
<html>
<head>

<script language="javascript">
function myFunction()
{
	var a = document.getElementById("ticketNum").value;
	var data = String(a);
	alert(a);
	<?php
	$b = 55;
	?>
	window.location.href="index.php?uid="+data;
}

function JS2PHP()
{
	var t = document.getElementById("ticketNum").value;
	var str = t + "";
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("GET","index.php?q="+str,true);
	xmlhttp.send();
}

function phpWrite()
{
	<?php 
	$myfile = fopen("test.out", "w");
	fwrite($myfile, $_GET["uid"]);
	fclose($myfile); 
	?>
	
}

</script>
</head>

<body>
<form>
<label for="ticketNum">Point:</label>
<input id="ticketNum" type="number" name="ticketNum">
<br>
</form>

<button onclick="myFunction()" >submit</button>
<button onclick="JS2PHP()" >JS2PHP</button>
<button onclick="phpWrite()" >php test</button>
<?php
echo "i am php";
$q=$_GET["q"];
if (strlen($q) > 0)
{
	phpWrite();
}
?>
</body>
</html>