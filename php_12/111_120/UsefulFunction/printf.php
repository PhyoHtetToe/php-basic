<?php

$n = 10000;
$place = "Japan";

printf("There are %u of people in %s.",$n,$place);

$file = "tst.txt";
$h = fopen($file,"w");
fprintf($h,"There are %u of people in %s.",$n,$place);
?>