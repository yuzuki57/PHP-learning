<?php
$input=explode(' ',trim(fgets(STDIN)));

$height=intval($input[0]) / 100;
$weight=intval($input[1]);

$bmi = floor(($weight / ($height ** 2)) * 10) / 10;

echo 'BMI:'.$bmi;

if ($bmi < 18.5) {
	echo "\n判定：低体重";
}elseif ($bmi >= 18.5 && $bmi < 25) {
	echo "\n判定：普通体重";
}elseif ($bmi >= 25 && $bmi < 30) {
	echo "\n判定：肥満（１度）";
}elseif ($bmi >= 30 && $bmi < 35) {
	echo "\n判定：肥満（２度）";
}elseif ($bmi >= 35 && $bmi < 40) {
	echo "\n判定：肥満（３度）";
}elseif ($bmi >= 40) {
	echo "\n判定：肥満（４度）";
}

?>