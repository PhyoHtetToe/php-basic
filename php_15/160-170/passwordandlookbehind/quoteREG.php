 <?php

    $str = "I am from Yangon ";
    echo $str . "<hr>";
    $rt = preg_quote($str, 'a');
    echo $rt;
