<!doctype html public \"-//W3C//DTD HTML 4.0 //EN\">
<html>
<meta http-equiv='refresh' content='60'>
<head>
<title>Welcome to Thomson Plastics, Inc.</title>
<link rel="stylesheet" href="welcomeboard.css" type="text/css">
</head>

<body>
<a href="input.php"><img id="edit" src="img/edit.png" border="0"></a>
<center>
<table>
<tr><td align="center">
<img id="grad" src="img/leftgrad.png"><img id="logo" src="img/tpilogo2.jpg"><img id="grad" src="img/rightgrad.png">
</td></tr>
</table>
<b id="welcome"><?php echo date("l  F d, Y"); ?></b>
<div id="spacer"></div>
<div id="spacer"></div>


<?php

$file = "welcomeboard.txt";
$page = join("",file($file));
$array1 = explode("\n", $page);

for ($i=0;$i<count($array1); $i++){
echo "<span id='short'>" . $array1[$i] . "</span>\n";
echo "<br>\n";
}

?>
</center>
</body>
</html>