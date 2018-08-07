<!DOCTYPE html>
<html>
<head>
<title>ws_g</title>
<script language="javascript">

function myFunction()
{
	
	var url = "ws_g.php?"
	
	var a = document.getElementById("PTa").value;
	var b = document.getElementById("PTb").value;
	var c = document.getElementById("PTc").value;
	var d = document.getElementById("PTd").value;
	var e = document.getElementById("PTe").value;
	
	url += "pa=";
	url += String(a);
	url += "&";
	url += "pb=";
	url += String(b);
	url += "&";
	url += "pc=";
	url += String(c);
	url += "&";
	url += "pd=";
	url += String(d);
	url += "&";
	url += "pe=";
	url += String(e);
	
	window.location.href = url;
	
	<?php
	$data = $_GET["pa"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("1.ws", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pb"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("2.ws", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pc"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("3.ws", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pd"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("4.ws", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pe"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("5.ws", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	} 
	?>
	
	alert("done.");
}

/*
function myFunction_a()
{
	var num = document.getElementById("PTa").value;
	var t = String(num);
	var url = "ws_g.php?pta=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["pta"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("1.ws", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}

function myFunction_b()
{
	var num = document.getElementById("PTb").value;
	var t = String(num);
	var url = "ws_g.php?ptb=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptb"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("2.ws", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}

function myFunction_c()
{
	var num = document.getElementById("PTc").value;
	var t = String(num);
	var url = "ws_g.php?ptc=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptc"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("3.ws", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}

function myFunction_d()
{
	var num = document.getElementById("PTd").value;
	var t = String(num);
	var url = "ws_g.php?ptd=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptd"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("4.ws", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}

function myFunction_e()
{
	var num = document.getElementById("PTe").value;
	var t = String(num);
	var url = "ws_g.php?pte=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["pte"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("5.ws", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}
*/
</script>
<style>
#body {
	width: 500px;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	font-size: 36px;
}

.B {
	font-size: 36px;
}
</style>
</head>

<body>
<div id="body">
<form>
<label for="PTa">1:</label>
<input id="PTa" type="number" name="PTa" class="B">
<br>
</form>
<!--<button onclick="myFunction_a()" >submit</button>-->
<br>
<br>

<form>
<label for="PTb">2:</label>
<input id="PTb" type="number" name="PTb" class="B">
<br>
</form>
<!--<button onclick="myFunction_b()" >submit</button>-->
<br>
<br>

<form>
<label for="PTc">3:</label>
<input id="PTc" type="number" name="PTc" class="B">
<br>
</form>
<!--<button onclick="myFunction_c()" >submit</button>-->
<br>
<br>

<label for="PTd">4:</label>
<input id="PTd" type="number" name="PTd" class="B">
<br>
</form>
<!--<button onclick="myFunction_d()" >submit</button>-->
<br>
<br>

<form>
<label for="PTe">5:</label>
<input id="PTe" type="number" name="PTe" class="B">
<br>
</form>
<br>
<br>
<button onclick="myFunction()" class="B">submit</button>
<br>
<br>
</div>
</body>
</html>