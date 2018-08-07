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
	$myfile = fopen("gs1.out", "w");
	fwrite($myfile, "");
	fclose($myfile);
	?>
}
	
</script>
</head>

<body>
<h1>ALL FILES OF GS1 EMPTY.</h1>

<br>
</body>
</html>