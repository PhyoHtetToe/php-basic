<?php

// $var = "Brighter Myanmar Copyright @2009";

// $result = preg_replace("/[[:digit:]]+/", "2001", $var);
// echo $result;



// $result = preg_replace(
//     array('/copyright/i', '/[0-9]+/'),
//     array('Computer Class', '2011'),
//     $var
// );



// echo "<pre>" . print_r($result, true) . "<pre>";



// $var = "MY ph no is 09888 8888 ";
// $result = preg_replace("/[[:alpha:]]/", "", $var);
// $phno = preg_replace("/[[:space:]]/", "", $result);

// echo $phno;



$var = "asd<span style='color:red'>KURO</span>";

$r = preg_replace("/<span style='color:red'>.*<\/span>/", "", $var);
echo $r;
