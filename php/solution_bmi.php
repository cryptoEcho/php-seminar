<?php
function getBMI(int $height, float $weight): ?float{
    if ($height<10 || $height>300){
        return null;
    }
    if ($weight<1.0 || $weight>300.0){
        return null;
    }
    $I = $weight / (($height*0.01)**2);
    return round($I, 2, PHP_ROUND_HALF_UP);
}