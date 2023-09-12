<?php

$file = "gg.json";
$h = fopen($file, "r");
$json = fread($h, filesize($file));
$arys = json_decode($json);
// print_r($ary);

foreach ($arys as $keys => $vals) {
    foreach ($vals as $k => $v) {
        echo $k . "=>" . $v . "<br>";
    }
}
