<?php
$str = "There is a need, there is a way!";
$ary = preg_match("/[^a-z]+/", $str);
echo $ary ? "TRUE" : "FALSE";
