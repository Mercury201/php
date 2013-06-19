<head><meta charset = "utf-8"></head>
<pre>
<?php
$browser = $_SERVER["HTTP_USER_AGENT"];
echo "$browser";
if(strpos($browser, "Chrome") !== false){
	echo "\n googl chormeです";
}
else {
	echo "chorme以外です";
}
?>
</pre>