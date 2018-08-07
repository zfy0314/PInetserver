<!DOCTYPE html>
<html>
<head>
<title>gs1_result</title>
<script language="javascript">

function myFunction()
{
	<?php
	exec("./gs1");
	?>
	window.location.href = "gs1.out";
}
</script>
</head>

<body>

<button onclick="myFunction()" >ClickHere</button>
</body>
</html>