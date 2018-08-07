<!DOCTYPE html>
<html>
<head>
<title>gs1_g</title>
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
	var url = "gs1_g.php?pta=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["pta"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("1.gs1", "a");
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
	var url = "gs1_g.php?ptb=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptb"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("2.gs1", "a");
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
	var url = "gs1_g.php?ptc=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptc"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("3.gs1", "a");
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
	var url = "gs1_g.php?ptd=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptd"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("4.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_e()
{
	var num = document.getElementById("PTe").value;
	var t = String(num);
	var url = "gs1_g.php?pte=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["pte"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("5.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_f()
{
	var num = document.getElementById("PTf").value;
	var t = String(num);
	var url = "gs1_g.php?ptf=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptf"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("6.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_g()
{
	var num = document.getElementById("PTg").value;
	var t = String(num);
	var url = "gs1_g.php?ptg=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["ptg"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("7.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction_h()
{
	var num = document.getElementById("PTh").value;
	var t = String(num);
	var url = "gs1_g.php?pth=";
	url = url + t;
	window.location.href = url;
	<?php
	$data = $_GET["pth"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("8.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	?>
}

function myFunction()
{
	window.location.href = "gs2_g.php";
}
</script>

<style type="text/css">
#test {
	font-size: 36px;
	margin: 50px;
}
#PTa {
	font-size: 36px;
}
#PTb {
	font-size: 36px;
}
#PTc {
	font-size: 36px;
}
#PTd {
	font-size: 36px;
}
#PTe {
	font-size: 36px;
}
#PTf {
	font-size: 36px;
}
#PTg {
	font-size: 36px;
}
#PTh {
	font-size: 36px;
}
</style>
</head>

<body>
<div id="test">
<form>
<label for="PTa">1:</label>
<input id="PTa" type="number" name="PTa">
<br>
</form>
<button id="PTa" onclick="myFunction_a()" >submit</button>
<br>
<br>

<form>
<label for="PTb">2:</label>
<input id="PTb" type="number" name="PTb">
<br>
</form>
<button id="PTb" onclick="myFunction_b()" >submit</button>
<br>
<br>

<form>
<label for="PTc">3:</label>
<input id="PTc" type="number" name="PTc">
<br>
</form>
<button id="PTc" onclick="myFunction_c()" >submit</button>
<br>
<br>

<label for="PTd">4:</label>
<input id="PTd" type="number" name="PTd">
<br>
</form>
<button id="PTd" onclick="myFunction_d()" >submit</button>
<br>
<br>

<form>
<label for="PTe">5:</label>
<input id="PTe" type="number" name="PTe">
<br>
</form>
<button id="PTe" onclick="myFunction_e()" >submit</button>
<br>
<br>

<form>
<label for="PTf">6:</label>
<input id="PTf" type="number" name="PTf">
<br>
</form>
<button id="PTf" onclick="myFunction_f()" >submit</button>
<br>
<br>

<form>
<label for="PTg">7:</label>
<input id="PTg" type="number" name="PTg">
<br>
</form>
<button id="PTg" onclick="myFunction_g()" >submit</button>
<br>
<br>

<label for="PTh">8:</label>
<input id="PTh" type="number" name="PTh">
<br>
</form>
<button id="PTh" onclick="myFunction_h()" >submit</button>
<br>
<br>
<br>
<br>
<button id="test" onclick="myFunction()" >NextRound</button>
</div>
</body>
</html>