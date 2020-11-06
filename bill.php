<?php
class Bill {
	// ここに追加

	// 税込み価格を算出するメソッド
	public static function payOff($money) {
		// ここに追加
		$money = number_format ( $money );

		return $money;
	}
}
?>
