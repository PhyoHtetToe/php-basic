<?php
$var = "<b>asdf</b>";
$bol = preg_match('/<b>(.*)<\/b>/', $var);
echo $bol ? "T" : "F" . "<br>";


$var = "<b>asdf</b>";
$bol = preg_match('/<b>(.+)<\/b>/', $var);
echo $bol ? "T" : "F";

$var = "php1";
$bol = preg_match('/\d/', $var);
echo $bol ? "T" : "F";

$var = "php1";
$bol = preg_match('/\s/', $var);
echo $bol ? "T" : "F";

$var = "asdf";
$bol = preg_match('/\w/', $var);
echo $bol ? "T" : "F";
