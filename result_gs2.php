<!DOCTYPE html>
<html>
<head>
<title>gs2_result</title>
<script language="javascript">

function myFunction()
{
	<?php
	exec("./gs2");
	?>
	window.location.href = "gs2.out";
}
</script>
</head>

<body>

<button onclick="myFunction()" >ClickHere</button>
</body>
</html>