<?php
//function getBMI(int $height, float $weight): ?float{
//    if ($height<10 || $height>300){
//        return null;
//    }
//    if ($weight<1.0 || $weight>300.0){
//        return null;
//    }
//    $I = $weight / (($height*0.01)**2);
//    return round($I, 2, PHP_ROUND_HALF_UP);
//}
include('solution_bmi.php');
echo getBMI(170, 77);
//echo PHP_EOL;
//try {
//    bmi(186, '65');
//}
//catch (\TypeError $e) {
//    var_dump($e);
//}


//$a = 25.425;
//echo round($a,2, PHP_ROUND_HALF_UP);
//echo 'Enter your weight: ';
//$w = (int)fgets(STDIN);
//echo PHP_EOL.'Now, enter your height: ';
//$h = (int)fgets(STDIN);
//echo PHP_EOL.'This is your BMI: '.bmi($h, $w).PHP_EOL.'Goodbye.'.PHP_EOL;
//$bm = bmi($h, $w);
//$result = match (true){
//    $bm >= 23 => 'выше нормы',
//    $bm == 20 => 'идельно',
//    $bm <= 18 => 'ниже нормы',
//    default => 'хорошо',
//};
//echo $result;