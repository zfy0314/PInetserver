<html>
<head>
<title>PHP test</title>
</head>
<body>

<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>

</body>
</html> 