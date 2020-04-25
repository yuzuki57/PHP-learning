<?php

echo "階乗計算したい数値を入力してください：";
//一行から一つの値を受け取る。入力の段階で数値に型変換
$a = intval(trim(fgets(STDIN)));

if (is_numeric($a)) {
    /**
     * 数値型であるかどうかを判定し、数値なら階乗計算をし、数値でなければメッセージ出力
     * 今回は入力段階で型変換しているので無問題
     *
     * @param  [type] $args
     * @return void
     */
    function fibo($args)
    {
    	if ($args == 0) {
    		return 0;
    	}
    	if ($args == 1) {
    		return 1;
    	}

        return fibo($args - 1) + fibo($args - 2)
    }

    echo fibo($a);
} else {
    echo "数値を入力してください\n";
}