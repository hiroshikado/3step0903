<?php
// クラスを定義したファイルの読込み
require_once ("bill.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>staticなプロパティ・メソッドを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>staticなプロパティ・メソッドを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php
		$money = 1000;
		echo "税抜き価格 ： " . number_format ( $money ) . "円<br>";
		
		// staticなプロパティやメソッドへのアクセス
		// ここに追加
		echo "消費税率   ： " . Bill::$TAX . "%<br>";
		echo "税込み価格 ： " . Bill::payOff ( $money ) . "円<br>";
		?>
	</div>
</body>
</html>