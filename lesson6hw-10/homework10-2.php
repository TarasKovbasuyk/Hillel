<?php
$num = 10;
$sequence = [
    1,
    2,2,
    3,3,3,
    4,4,4,4,
    5,5,5,5,5,
    6,6,6,6,6,6,
    7,7,7,7,7,7,7,
    8,8,8,8,8,8,8,8,
    9,9,9,9,9,9,9,9,9
    ];
function reverse ($sequence,$num){
    $num--;
    if ($num>=0){
    echo $sequence[$num];
    reverse($sequence,$num);
}
}
reverse ($sequence,$num);