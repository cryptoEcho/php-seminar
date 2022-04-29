<?php

$str1 = "5 little rabbits";
// принудительно преобразовать строку к int
settype($str1, 'int');
var_dump($str1); // outputs int(5)
