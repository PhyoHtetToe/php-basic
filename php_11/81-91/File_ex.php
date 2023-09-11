<?php

// function readMyfile($filename){
//     if(file_exists($filename)){
//         $h = fopen($filename, "r");
//         $size = filesize($filename);
//         $data = fread($h,$size);
//         return $data;
//     }else{
//         echo " file not found";
//     }
// }
// echo readMyfile("yourxt.txt");

function readMyfile($filename){
    if(file_exists($filename)){
       $data = file_get_contents($filename);
       return $data;
    }else{
        echo " file not found";
    }
}
echo readMyfile("yourtxt.txt");

?>