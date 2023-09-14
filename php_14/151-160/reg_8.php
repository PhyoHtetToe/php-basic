<?php

$var = "";
$bol = preg_match('/^$/', $var);
echo $bol ? "T" : "F";

$var = "php";
$bol = preg_match('/p\wp/', $var);
echo $bol ? "T" : "F";

$var = "phsp";
$bol = preg_match('/p\w{2}p/', $var);
echo $bol ? "T" : "F";
