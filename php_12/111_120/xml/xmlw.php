<?php
$ary = array(
    "name" => "kuro",
    "age" => "18"
);
$str = "";
$str .= "<coder>";
foreach ($ary as $key => $val) {
    $str .= "<" . $key . ">";
    $str .= $val;
    $str .= "</" . $key . ">";
}
$str .= "</coder>";
echo $str;
$dt = fopen("my.xml", "w");
fprintf($dt, $str);
