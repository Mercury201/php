<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>YK2</title>
</head>
<body>
	<?php

	if(is_numeric($_POST['前項']) && is_numeric($_POST['後項']) != false){

		switch($_POST['演算子']){
			case '加算':
				echo $result =$_POST['前項'] + $_POST['後項'];
				break;
			case '除算':
				if($_POST['後項'] != 0){
					$result =$_POST['前項'] / $_POST['後項'];
				}else{
					echo '0はやめて';
				}
				break;
			case '乗算':
				$result =$_POST['前項'] * $_POST['後項'];
				break;
			case '減算':
				$result =$_POST['前項'] - $_POST['後項'];
				break;
			case 'none':
				echo '演算子を選択してください';
				goto a;
		}

		if($result != INF){
			echo "$result";
		}
		else{
			echo 'でかすぎぃ';
		}
		
	}else{
		echo 'テキストフィールドに数字以外いれないでよ';
	}
	
	a:
	echo '<p>前項は' .$_POST['前項'];
	echo '後項は' .$_POST['後項'].'</p>';

	?>
	<form action="YK1.php">
		<button>YK1へ</button>
	</form>
</body>
</html>
