<?php

function Read(){
$file = "msgboard2.txt";
echo file_get_contents($file);
};

function Write(){
$file = "msgboard2.txt";
$fp = fopen($file, "w");
$data = $_POST["visitors"];
fwrite($fp, $data);
fclose($fp);
};
?>

<?php
if ($_POST["submit_check"]){
Write();
};
?>      

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<textarea width="400px" height="400px" name="visitors"><?php Read(); ?></textarea><br>
<input type="submit" name="submit" value="Update text">
<input type="hidden" name="submit_check" value="1">
</form>

	<?php
if ($_POST["submit_check"]){
echo 'Text updated';
};
?>      