<?php
/**
 * TODO:
 * 実行後に入力を一回求められるので任意の数値を入力。その後、入力した数値分の回数だけ日付と値段を入力する（西暦で入力）。
 * 回数分の入力を終えると合計ポイントを出力します。
 * 日付に応じて加算されるポイントが変換し、毎月一日は5%、5の付く日は3%、3のつく日は2%、それ以外の日は1%を値段に応じて加算していきます。
 * なお、条件を同時に満たす場合は最も加算割合が高いものを適用する。
 *
 * @return void
 */
function PointCalculator()
{
    $point = 0;
    $HighPointCount = 0.05;
    $NearPointCount = 0.03;
    $lowPointCount = 0.02;
    $LowestPointCount = 0.01;
    $input_line = trim(fgets(STDIN));
    $MonthFastday = "/^[0-9]{4}\/[0-9]{2}\/01+$/";
    $Month5_multiple = "/^[0-9]{4}\/[0-9]{2}\/[0-9]5+$/";
    $Month3_multiple = "/^[0-9]{4}\/[0-9]{2}\/[0-9]3+$/";
    $Month_last_day = "/^[0-9]{4}\/[0-9]{2}\/3[0-9]+$/";

    for ($i = 0; $i < $input_line; $i++) {
        $s = trim(fgets(STDIN));

        $s = explode(" ", $s);
        if (strtotime($s[0]) === strtotime($MonthFastday)) {
            $point += floor($s[1] * $HighPointCount);
        } elseif (strtotime($s[0]) === strtotime($Month5_multiple)) {
            $point += floor($s[1] * $NearPointCount);
        } elseif (strtotime($s[0]) === strtotime($Month3_multiple) || strtotime($s[0]) === strtotime($Month_last_day)) {
            $point += floor($s[1] * $lowPointCount);
        } else {
            $point += floor($s[1] * $LowestPointCount);
        }
    }

    echo "\n合計ポイントは".$point."ポイントです。";
}

echo PointCalculator();
