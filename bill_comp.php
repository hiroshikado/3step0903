<?php
class Bill {
	public static $TAX = 0.08;    // 税率

	// 税込み価格を算出するメソッド
	public static function payOff($money) {
		$money = ( int ) ( $money * (1 + self::$TAX ));
		$money = number_format ( $money );

		return $money;
	}
}
?>
