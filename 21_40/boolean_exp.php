<?php
#""=>False
#"0" => False
#"123" => True
#"+-" => True
#null value => False
#Array without element => False
    $bol = "";
    echo $bol ? "True" : "False";

    $bol2 = array(1);
    echo $bol2 ? "True" : "False";
?>