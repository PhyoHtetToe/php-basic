<?php

$ary = array();

echo count($ary) . "<br>";

array_push($ary, "one");
array_push($ary, "Two");
array_push($ary, "Three");
echo count($ary) . "<br>";
print_r($ary);

array_pop($ary);
print_r($ary);

array_shift($ary);
print_r($ary);
