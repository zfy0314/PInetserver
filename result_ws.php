<!DOCTYPE html>
<html>
<head>
<title>ws_result</title>
<script language="javascript">

function myFunction()
{
	<?php
	exec("./ws");
	?>
	window.location.href = "ws.out";
}
</script>
</head>

<body>

<button onclick="myFunction()" >ClickHere</button>
</body>
</html>