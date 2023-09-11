<?php

function FileCreat($filename){
    $h = fopen($filename, "w");
    fclose($h);
}

// FileCreat('yourtxt.txt');
function filewrite($filename,$data){
    $h = fopen($filename, "w");
    fwrite($h, $data);
    fclose($h);
}
// filewrite('yourtxt.txt', "kk");
function fileappend($filename,$data){
    $h = fopen($filename, "a");
    fwrite($h,$data);
    fclose($h);
}
// fileappend('yourtxt.txt', "kk");
function fileread($filename){
    $h = fopen($filename, "r");
    $size = filesize($filename);
    $data = fread($h, $size);
    fclose($h);
return $data ;
}
echo fileread('yourtxt.txt');
?>