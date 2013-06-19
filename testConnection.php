<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>PHP DBテスト</title>
</head>
<body>
	<?php
	$link = mysql_connect('localhost','user','puser'); //接続
	if(!$link){
		die('接続に失敗しました'.mysql_error());
	}
	print( '<p> 接続に成功しました </p>');

	$db_selected = mysql_selectdb('test',$link); //DB選択
	if(!$db_selected){
		die('データベース選択失敗です'.mysql_error());
	}
	print('<p>データベースを選択しました</p>');

	//sql処理
	mysql_set_charset('utf-8');
	$result = mysql_query('select id, pass  from certification');
	if(!$result){
		die('クエリが失敗しました' . mysql_error($result));
	}
	while($row = mysql_fetch_assoc($result)){
		print('<p>');
		print('id = ' . $row['id']. '<br/>');
		print('pass = ' . $row['pass'] . '<br/>');
		print('</p>');
	}


	$close_flag = mysql_close($link); //切断

	if($close_flag){
		print('切断に成功しました');
	}
	?>
</body>
</html>


