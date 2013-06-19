
<?php
//DB接続
$link = mysql_connect('localhost','user','puser');
$db_select = mysql_selectdb('question',$link);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>演習４</title>
<style>
body {
	margin: 5px;
	paddeing: 10px;
}

table tbody tr td {
	text-align: center;
}
</style>
<title></title>
</head>
<body>

	<article>
		<form action="" method="post">
			<select name="selecter">
				<option value="default" selected>ALL</option>
				<?php 
				$result = mysql_query('select * from grouping');
				while($row = mysql_fetch_row($result)){
					if(!isset($_POST['selecter'])){
						echo '<option value = "' . "$row[0]" . '">' ."$row[1]" .'</option>';
					}else{
						if($_POST['selecter'] == $row[0]){
							echo '<option value = "' . "$row[0]" . '" selected>' ."$row[1]" .'</option>';
						}else{
							echo '<option value = "' . "$row[0]" . '">' ."$row[1]" .'</option>';
						}
					}
					$group["$row[0]"] = $row[1];
				}
				?>
			</select>
			<?php
			if(!isset($_POST['sort'])){
				echo '<input type="radio" name="sort" value="asc"> 価格の安い順';
				echo '<input type="radio" name="sort" value="desc">価格の高い順';
			}else{
				if($_POST['sort'] == 'asc'){
					echo '<input type="radio" name="sort" value="asc" checked> 価格の安い順';
					echo '<input type="radio" name="sort" value="desc">価格の高い順';
				}else{
					echo '<input type="radio" name="sort" value="asc"> 価格の安い順';
					echo '<input type="radio" name="sort" value="desc"checked>価格の高い順';
				}
			}
			echo '<input type="submit" value="並べ替える">';
			?>
		</form>
		<table border="1" rules="all">
			<thead>
				<tr>
					<th>区分</th>
					<th>メーカー</th>
					<th>商品名</th>
					<th>価格</th>
					<th>写真</th>
				</tr>
			</thead>
			<!-- trタグで囲んだのが一行 -->
			<tbody>
				<?php
				//sql
				$baseSql = 'select group_name, maker_name, goods_name, price, picture from goods, maker, grouping
				where goods.group_id = grouping.group_id and goods.maker_id = maker.maker_id';

				//ソート
				$where = "";
				if(isset($_POST['selecter'])){
					foreach ($group as $key => $value){
						if($_POST['selecter'] == $key){
							$where = ' and group_name ="'. $value.'"';
						}elseif($_POST['selecter'] == 'default'){
							$where = "";
						}
					}
				}

				$order = "";
				if(isset($_POST['sort'])){
					if($_POST['sort']=='asc'){
						$order = " order by price asc";
					}elseif($_POST['sort'] == 'desc') {
						$order = " order by price desc";
					}
				}

				//sql実行
				$result = mysql_query($baseSql.$where.$order);

				while($row = mysql_fetch_assoc($result)){
					echo '<tr>';
					foreach($row as $key => $value){
						if($key == 'picture'){
							echo '<td> <img src ="img/'. $value. '"  width = 100 height = 70></td>';
						}elseif($key == 'price'){
							echo '<td>\\' .number_format($value). '</td>';
						}else{
							echo '<td>' .$value. '</td>';
						}
					}
					echo '</tr>';
				}

				?>
			</tbody>
			<!-- ここまで -->
		</table>
	</article>
</body>
</html>
