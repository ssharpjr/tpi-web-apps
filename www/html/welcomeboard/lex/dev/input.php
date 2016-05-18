<html>
<head>
<title>TPI Message Board Update</title>
<link rel="stylesheet" href="input.css" type="text/css">
</head>

<?php

function Read(){
  $file = "welcomeboard.txt";
  echo file_get_contents($file);
};

function Write(){
  $file = "welcomeboard.txt";
  $fp = fopen($file, "w");
  $data = $_POST['welcomeboard'];
  fwrite($fp, $data);
  fclose($fp);
};

function Show(){
	$file = "welcomeboard.txt";
	$page = join("",file($file));
	$array1 = explode("\n", $page);

	for ($i=0;$i<count($array1); $i++){
	echo $array1[$i];
	};
};

if ($_POST['submit_check']){
Write();
};
?>

<body>
<div id="stylized" class="myform">
<form id="form" name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<center>
<h1>Update the Welcome Board</h1>
<p>The Welcome Board can only show <b>seven (7)</b> lines of text.</p>
</center>

<label>Visitors 
<span class="small">Enter visitor names <br> (limit: 7 lines) </span>
</label>
<textarea name="welcomeboard" rows="7"><?php Show(); ?></textarea>
<br><br><br><br><br><br><br><br>
<div class="spacer"></div>

<button type="submit">Update</button>
<input type="hidden" name="submit_check" value="1">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">Return to the Welcome Board</a>

</form>
</div>
</body>
</html>