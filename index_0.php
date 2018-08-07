<!DOCTYPE html>
<html>
<head>
<title>my page</title>
<script language="javascript">
function myFunction()
{
	var url = "index.php?";
	<?php 
	$myfile = fopen("test.out", "w");
	fwrite($myfile, "");
	fclose($myfile); 
	?>
	
	var a = document.getElementById("PTa").value;
	//alert(a);
	var ta = String(a);
	url = url + "a=";
	url = url + ta;
	url = url + "&";
	window.location.href=url;
	<?php 
	$myfile = fopen("test.out", "a");
	fwrite($myfile, "a:");
	fwrite($myfile, $_GET["a"]);
	fwrite($myfile, "\n");
	fclose($myfile); 
	?>

	var b = document.getElementById("PTb").value;
	//alert(b);
	var tb = String(b);
	url = url + "b=";
	url = url + tb
	window.location.href=url;
	<?php 
	$myfile = fopen("test.out", "a");
	fwrite($myfile, "b:");
	fwrite($myfile, $_GET["b"]);
	fwrite($myfile, "\n");
	fclose($myfile); 
	?>
}

</script>
</head>

<body>
<form>
<label for="PTa">Point for a:</label>
<input id="PTa" type="number" name="PTa" required>
<br>
</form>
<br>
<br>

<label for="PTb">Point for b:</label>
<input id="PTb" type="number" name="PTb" required>
<br>
</form>
<button onclick="myFunction()" >submit</button>
<br>
<br>


</body>
</html>