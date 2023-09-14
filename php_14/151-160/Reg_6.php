<?php
$var = "Brighter 12213 Myanmar";

$rt = preg_replace('/[[:alpha:]]/', "@", $var);
echo $rt . "<br>";


$var = "Brighter 12213 Myanmar";

$rt = preg_replace('/[[:digit:]]/', " ", $var);
echo $rt . "<br>";

$var = "Brighter 12213##Myanmar";

$rt = preg_replace('/[[:alnum:]]/', " ", $var);
echo $rt . "<br>";

$var = "Brighter 12213##Myanmar";

$rt = preg_replace('/[[:space:]]/', "__", $var);
echo $rt . "<br>";


$var = "Brighetr 123 45";
$data = preg_replace("/[[:space:]]/", "", $var);
$result = preg_match('/\s/', $data);
echo $result ? "T" : "F";
