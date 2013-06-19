<?php
$textfile = 'file.txt';

$fp = fopen($textfile, 'r+b');
if(!$fp){
	exit('ファイルがないか異常があります');
}

if(!flock($fp, LOCK_EX)){
	exit('ファイルをロックできませんでした');
}

while(!feof($fp)){
	print (fgets($fp) .  '<br/>');
}

fclose($fp);
?>