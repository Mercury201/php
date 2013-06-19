<!DOCTYPE html>
<html>

<!-- ヘッダー -->
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width">
<title>AV</title>

<!-- スタイルシート -->
<style>
/* 全体 */
body {
	margin: 0 auto;
	background-image: linear-gradient(bottom, #FFFA9E 21%, #FAFAFA 90%);
	background-image: -o-linear-gradient(bottom, #FFFA9E 21%, #FAFAFA 90%);
	background-image: -moz-linear-gradient(bottom, #FFFA9E 21%, #FAFAFA 90%);
	background-image: -webkit-linear-gradient(bottom, #FFFA9E 21%, #FAFAFA 90%);
	background-image: -ms-linear-gradient(bottom, #FFFA9E 21%, #FAFAFA 90%);
	background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.21, #FFFA9E
		), color-stop(0.9, #FAFAFA) );
}

header,section,footer {
	width: 95%;
	display: block;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	-webkit-box-shadow: 0px 0px 4px #666;
	-moz-box-shadow: 0px 0px 4px #666;
	box-shadow: 0px 0px 4px #666;
	border: 1px solid #D2FFC9;
	margin: 0 auto;
	padding: 10px;
	background-color: #D2FFC9;
	padding: 10px;
	display: block;
}

/* 見出し */
section h2,nav h2 {
	padding: 10px;
	margin: 10px -10px;
}
/* ヘッダー */
header {
	text-align: center;
}

header h1 {
	font-family: fantasy;
	font-size: 40px;
	font-family: fantasy;
}

/* ナビゲーション */
nav {
	
}

nav ul {
	
}

nav ul li {
	float: left;
	list-style-type: none;
}

nav ul li a {
	display: block;
	text-decoration: none;
	text-align: center;
}

/* 	コンテンツ */
section {
	clear: both;
	text-align: center;
}

/* フッター */
footer {
	clear: both; ! important;
	text-align: center;
	clear: both;
}
</style>
</head>

<body>

	<!-- ヘッダー -->
	<header>
		<h1>Advice View</h1>
		<h2>学園祭を楽しむための情報を配信中</h2>

		<!-- 	ナビゲーション -->
		<nav>
			<ul>
				<li><a href="">ダミーページ１</a></li>
				<li><a href="">ダミーページ２</a></li>
				<li><a href="">ダミーページ３</a></li>
				<li><a href="">ダミーページ４</a></li>
			</ul>
		</nav>
	</header>

	<!-- 	コンテンツ -->
	<article>
		<section>
			<h2>ツイッタータイムライン</h2>

			<!-- nhk_newsのハッシュタグ -->
			<a class="twitter-timeline" data-chrome="nofooter"
				href="https://twitter.com/search?q=%23nhk_news"
				data-widget-id="337391433008939008">#nhk_news に関するツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</section>

	</article>

	<!-- フッター -->
	<footer> フッター </footer>

</body>
</html>
