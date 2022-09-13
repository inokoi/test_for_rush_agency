<?php

$yes = 'да';
$no = 'нет';

for ($i = 1; $i <= 50; $i++) {
    $five = 5;
    $seven = 7;

    $first = $i % $five;
    $second = $i % $seven;

    if($first == 0 && $second == 0 ){
        printf("$yes$no \n");
    } else if($second == 0){
        printf("$no \n");
    } else if ($first == 0) {
        printf("$yes \n");
    } else {
        printf($i." \n");
    }
}
