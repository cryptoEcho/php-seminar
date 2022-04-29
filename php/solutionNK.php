<?php
function getSumNK($input, int $N, int $K): int{
    $sum = 0;
    if (count($input) == 0){
        return 0;
    }
    $c = $N;
    $i = 1;
    foreach($input as $key => $value){
        if (!is_int($value) or count($input) < $N+$K-1 or $N<0 or $K<0){
            return -1;
        }

        if ($N == 0){
            $sum += $value;
        }
        elseif ($K == 0 and $c != 0){
            $sum += $value;
            $c -= 1;
        }
        elseif ($i >= $K and $c != 0){
            $sum += $value;
            $c -= 1;
        }
        $i++;
    }
    return $sum;
}
