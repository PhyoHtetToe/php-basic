<?php
$str = "There is a need, there is a way!";
$ary = preg_split("/[\s,]/", $str, -1, PREG_SPLIT_NO_EMPTY);
echo "<pre>" . print_r($ary, true) . "</pre>";
