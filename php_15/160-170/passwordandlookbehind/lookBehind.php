<?php

#positvie look aheade 

// $str = "ABC1";
// $ret = preg_match("/A(?=[A-Z])/", $str);

// echo $ret ? "TRUE" : "FALSE";


#positvie look behind (?<=)

// $str = "CA@BC1";
// $ret = preg_match("/(?<=C)A/", $str);

// echo $ret ? "TRUE" : "FALSE";


#negative look Ahead (?!)

// $str = "A@BC1";
// $ret = preg_match("/A(?!C)/", $str);

// echo $ret ? "TRUE" : "FALSE";


#negative look behind (?!)

$str = "A@BC1";
$ret = preg_match("/(?<!C)1/", $str);

echo $ret ? "TRUE" : "FALSE";
