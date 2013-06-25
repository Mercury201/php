<!doctype html>
<html>
<head>
<title>URLチェッカー</title>
</head>
<body>

<form action="" method="post">
URL
<input type = "text" name ="url">
<input type = "submit" value= "push">
</form>
<?php 

if(isset($_POST['url']) && $_POST['url'] !=''){
	require 'match.php';
	$instance = new match($_POST['url']);
	$result = $instance->getResult();
	echo $result;
}
?>
</body>
</html>