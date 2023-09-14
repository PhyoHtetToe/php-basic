<?php
$str = "There is a need, there is a way!";
$ary = preg_split("//", $str, 5, PREG_SPLIT_OFFSET_CAPTURE);
echo "<pre>" . print_r($ary, true) . "</pre>";
