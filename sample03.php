<?php
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

    echo "\n".$point."ポイント";
