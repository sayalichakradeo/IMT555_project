<?php
$currentDir = getcwd();
$found = 0;
$file = "";
$dir    = $currentDir;
$files1 = scandir($dir);
#print_r($files1);
#$files2 = scandir($dir, 1);

foreach($files1 as &$val)
	if($val == 'config.php'){
		$file_name = $val;
		$found = 1;
	}

if($found==1){
	print_r($file_name, " found\n");
	$myfile = fopen($file_name, "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
	}
else
	print_r("config.php not found\n")

#print_r($files1);
#print_r($files2);
?>