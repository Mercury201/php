<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>計算PHP</title>
</head>
<body>
	<form action="YK2.php" method="post">
		<input type="text" name="前項">
		 <select name="演算子">
			<option value="none" selected >---演算子を選択してください---</option>
			<option value="乗算">*</option>
			<option value="加算">+</option>
			<option value="減算">-</option>
			<option value="除算">/</option>
		</select> 
		<input type="text" name="後項"> <input type="submit" value="送信">
	</form>
</body>
</html>
