<?php


// $str = "     There are 10000 of people in Japan./      ";

// echo lcfirst($str) . "<br>";
// echo ucwords($str) . "<br>";
// echo strtolower($str) . "<br>";
// echo strtoupper($str) . "<br>";

#lcfirst = first word ko lower chg
#ucwords = a sa ko akyee chg 
#strtolower/strtoupper = name a tine pl

// echo strlen($str) . "<br>";
// $var = rtrim($str);
// echo strlen($var);
#trim = space twy ko nyiee tl
#ltrim and rtrim= left/right ka space twy ko dele

$pass = "123123";
// $pass = md5($pass,false) . "<br>";
// echo $pass;
// $pass = sha1($pass,false) . "<br>";
// echo $pass;
// $pass = crypt($pass,$pass) . "<br>";
// echo $pass;

// $pass = md5($pass,false);
// $pass = sha1($pass,false);
// $pass = crypt($pass,$pass);

// echo $pass;

#md5 , sha1 , crypt = pass encrypt loat


// $str = "A Bla bla Create a pull request for '81_100' on GitHub by bla Bla";

// echo strpos($str,"bla") . "<br>";
// echo strrpos($str,"bla") . "<br>";
// echo stripos($str,"bla") . "<br>";
// echo strripos($str,"bla") . "<br>";

#strpos pa hta ma twy tat word's index ko pya
#strrpos ka nout sone ka nay shr ter
#stripos and strripos ka uppercase lower case ma tu ll ya tl

$str = "There are 10000 of people in Japan.";
$var = str_word_count($str);
echo $var . "<br>";
$var = chunk_split($str, 35 , ".....");
echo $var . "<br>";
$var = substr($str,3,strlen($str));
echo $var . "<br>";
echo strlen($str);
#str_word_count name a tine pl
#chunk_split 5 ku nay yin dash ko use
#substr lo trr lay ko index number ntt htote
?>