<!DOCTYPE html>
<html>
<head>
<title>gs2</title>
<script language="javascript">
/*
function myFunction()
{
	
	var url = "index.php?"
	<?php 
	#$myfile = fopen("test.out", "w");
	#fwrite($myfile, "");
	#fclose($myfile); 
	?>
	
	var a = document.getElementById("PTa").value;
	//alert(a);
	var ta = String(a);
	url = url + "uida=";
	url = url + ta;
	url = url + "&";
	window.location.href=url;
	<?php 
	#$myfile = fopen("test.out", "a");
	#fwrite($myfile, "a:");
	#fwrite($myfile, $_GET["uida"]);
	#fwrite($myfile, "\n");
	#fclose($myfile); 
	?>

	var b = document.getElementById("PTb").value;
	//alert(b);
	var tb = String(b);
	url = url + "uidb=";
	url = url + tb
	window.location.href=url;
	<?php 
	#$myfile = fopen("test.out", "a");
	#fwrite($myfile, "b:");
	#fwrite($myfile, $_GET["uidb"]);
	#fwrite($myfile, "\n");
	#fclose($myfile); 
	?>
	
	alert("done.");
}
*/

function myFunction_a()
{
	var num = document.getElementById("PTa").value;
	var t = String(num);
	var url = "gs2_g.php?pta=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["pta"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("1.gs2", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_b()
{
	var num = document.getElementById("PTb").value;
	var t = String(num);
	var url = "gs2_g.php?ptb=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptb"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("2.gs2", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_c()
{
	var num = document.getElementById("PTc").value;
	var t = String(num);
	var url = "gs2_g.php?ptc=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptc"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("3.gs2", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_d()
{
	var num = document.getElementById("PTd").value;
	var t = String(num);
	var url = "gs2_g.php?ptd=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptd"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("4.gs2", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}
</script>
</head>

<body>
<form>
<label for="PTa">1:</label>
<input id="PTa" type="number" name="PTa">
<br>
</form>
<button onclick="myFunction_a()" >submit</button>
<br>
<br>

<form>
<label for="PTb">2:</label>
<input id="PTb" type="number" name="PTb">
<br>
</form>
<button onclick="myFunction_b()" >submit</button>
<br>
<br>

<form>
<label for="PTc">3:</label>
<input id="PTc" type="number" name="PTc">
<br>
</form>
<button onclick="myFunction_c()" >submit</button>
<br>
<br>

<label for="PTd">4:</label>
<input id="PTd" type="number" name="PTd">
<br>
</form>
<button onclick="myFunction_d()" >submit</button>
<br>
<br>


</body>
</html>