<?php
error_reporting(E_ALL);
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
$sumP = 0;
$sumM = 0;
foreach ($arr as $key => $value){
    if ($value<0){
        $sumM +=$value;
    }else {
        $sumP+=$value;
    }
}
echo $sumM.'<br>';
echo $sumP;
