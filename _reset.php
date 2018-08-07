<!DOCTYPE html>
<html>
<head>
<title>reset</title>
<script language="javascript">
function reset_gs1()
{
	<?php
	$myfile = fopen("1.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("2.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("3.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("4.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("5.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("6.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("7.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("8.gs1", "w");
	fwrite($myfile, "");
	fclose($myfile);
	?>
	alert("gs1 all files empty.");
}

function reset_ws()
{
	<?php
	$myfile = fopen("1.ws", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("2.ws", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("3.ws", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("4.ws", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("5.ws", "w");
	fwrite($myfile, "");
	fclose($myfile);
	?>
	alert("ws all files empty.");
}

function reset_gs2()
{
	<?php
	$myfile = fopen("1.gs2", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("2.gs2", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("3.gs2", "w");
	fwrite($myfile, "");
	fclose($myfile);
	$myfile = fopen("4.gs2", "w");
	fwrite($myfile, "");
	fclose($myfile);
	?>
	alert("gs2 all files empty.");
}
	
</script>
</head>

<body>
<h1>BE SUPPER CAREFUL WITH THESE BUTTONS !!!</h1>
<button onclick="reset_gs1()" >reset_gs1</button>
<br>
<br>
<br>
<button onclick="reset_ws()" >reset_ws</button>
<br>
<br>
<br>
<button onclick="reset_gs2()" >reset_gs2</button>
<br>
</body>
</html>