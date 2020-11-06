<?php
class Bill {
	// ここに追加
	public static $TAX = 0.08;    // 税率

	// 税込み価格を算出するメソッド
	public static function payOff($money) {
		// ここに追加
		$money = ( int ) ( $money * (1 + self::$TAX ));
		$money = number_format ( $money );

		return $money;
	}
}
?>
