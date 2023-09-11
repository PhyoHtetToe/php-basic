<?php

$qry = $_SERVER['QUERY_STRING'];

echo $qry;
    switch($qry){
        case "home" : header('Location:home.php');break;
        case "about" : header('Location:about.php');break;
        default : 
        echo "there is no file";
    }   

?>