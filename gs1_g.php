<!DOCTYPE html>
<html>
<head>
<title>gs1_g</title>
<script language="javascript">

function myFunction_n()
{
	
	var url = "gs1_g.php?"
	
	var a = document.getElementById("PTa").value;
	var b = document.getElementById("PTb").value;
	var c = document.getElementById("PTc").value;
	var d = document.getElementById("PTd").value;
	var e = document.getElementById("PTe").value;
	var f = document.getElementById("PTf").value;
	var g = document.getElementById("PTg").value;
	var h = document.getElementById("PTh").value;
	
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
	url += "&";
	url += "pf=";
	url += String(f);
	url += "&";
	url += "pg=";
	url += String(g);
	url += "&";
	url += "ph=";
	url += String(h);
	
	window.location.href = url;
	
	<?php
	$data = $_GET["pa"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("1.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pb"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("2.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pc"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("3.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pd"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("4.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pe"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("5.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pf"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("6.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["pg"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("7.gs1", "a");
		$arr = array("g", $data, "\n");
		fwrite($myfile, implode("", $arr));
		fclose($myfile);
	}
	$data = $_GET["ph"];
	if (strlen($data) > 0)
	{
		$myfile = fopen("8.gs1", "a");
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
	var url = "gs1_g.php?pta=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["pta"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("1.gs1", "a");
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
	var url = "gs1_g.php?ptb=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptb"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("2.gs1", "a");
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
	var url = "gs1_g.php?ptc=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptc"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("3.gs1", "a");
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
	var url = "gs1_g.php?ptd=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["ptd"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("4.gs1", "a");
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
	var url = "gs1_g.php?pte=";
	url = url + t;
	window.location.href = url;
	<?php
	#$data = $_GET["pte"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("5.gs1", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
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
	#$data = $_GET["ptf"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("6.gs1", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
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
	#$data = $_GET["ptg"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("7.gs1", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
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
	#$data = $_GET["pth"];
	#if (strlen($data) > 0)
	#{
	#	$myfile = fopen("8.gs1", "a");
	#	$arr = array("g", $data, "\n");
	#	fwrite($myfile, implode("", $arr));
	#	fclose($myfile);
	#}
	?>
}
*/
function myFunction()
{
	window.location.href = "gs2_g.php";
}

</script>



<style type="text/css">
#body {
	width: 500px;
	margin-top: 20px;
	margin-right: auto;
	margin-left: auto;
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
<!--<button onclick="myFunction_a()" class="B" >submit</button>-->
<br>
<br>

<form>
<label for="PTb">2:</label>
<input id="PTb" type="number" name="PTb" class="B">
<br>
</form>
<!--<button onclick="myFunction_b()" class="B" >submit</button>-->
<br>
<br>

<form>
<label for="PTc">3:</label>
<input id="PTc" type="number" name="PTc" class="B">
<br>
</form>
<!--<button onclick="myFunction_c()" class="B" >submit</button>-->
<br>
<br>

<label for="PTd">4:</label>
<input id="PTd" type="number" name="PTd" class="B">
<br>
</form>
<!--<button onclick="myFunction_d()" class="B" >submit</button>-->
<br>
<br>

<form>
<label for="PTe">5:</label>
<input id="PTe" type="number" name="PTe" class="B">
<br>
</form>
<!--<button onclick="myFunction_e()" class="B" >submit</button>-->
<br>
<br>

<form>
<label for="PTf">6:</label>
<input id="PTf" type="number" name="PTf" class="B">
<br>
</form>
<!--<button onclick="myFunction_f()" class="B" >submit</button>-->
<br>
<br>

<form>
<label for="PTg">7:</label>
<input id="PTg" type="number" name="PTg" class="B">
<br>
</form>
<!--<button onclick="myFunction_g()" class="B" >submit</button>-->
<br>
<br>

<label for="PTh">8:</label>
<input id="PTh" type="number" name="PTh" class="B">
<br>
</form>
<br>
<br>
<button onclick="myFunction_n()" class="B" >submit</button>
<br>
<br>
<br>
<br>
<button onclick="myFunction()" class="B" >NextRound</button>
</div>
</body>
</html>