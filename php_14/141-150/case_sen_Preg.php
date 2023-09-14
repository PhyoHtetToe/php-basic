<?php



$var = "Kuro 23030230";
$bol1 = preg_match("/[0-9]/", $var);
echo $bol1 ? "True" : "False";

$varvar = "Kuro 23030230";
$bol2 = preg_match("/[^a-z]/", $varvar);
echo $bol2 ? "True" : "False";

$var = "Kuro 23030230";
$bol1 = preg_match("/o+/", $var);
echo $bol1 ? "True" : "False";

$var = "Kuro 23030230";
$bol1 = preg_match("/g*/", $var);
echo $bol1 ? "True" : "False";

$var = "Kuro 23030230";
$bol1 = preg_match("/p?/", $var);
echo $bol1 ? "True" : "False";

$var = "Kuro 23030230";
$bol1 = preg_match("/[23{2,3}]/", $var);
echo $bol1 ? "True" : "False";

$var = "Kuro 23030230";
$bol1 = preg_match("/[23{2,}]/", $var);
echo $bol1 ? "True" : "False";
