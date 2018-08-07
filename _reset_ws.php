<!DOCTYPE html>
<html>
<head>
<title>reset</title>
<script language="javascript">

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
	$myfile = fopen("ws.out", "w");
	fwrite($myfile, "");
	fclose($myfile);
	
	?>
	alert("ws all files empty.");
}

</script>
</head>

<body>
<h1>ALL FILES OF WS EMPTY.</h1>

<br>
</body>
</html>