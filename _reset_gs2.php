<!DOCTYPE html>
<html>
<head>
<title>reset</title>
<script language="javascript">

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
	$myfile = fopen("gs2.out", "w");
	fwrite($myfile, "");
	fclose($myfile);
	
	?>
}
	
</script>
</head>

<body>
<h1>ALL FILES OF GS2 EMPTY.</h1>

<br>
</body>
</html>