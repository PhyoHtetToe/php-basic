<?php

$pass = "|2asdf123SWFD_";
$bol = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))/", $pass);

echo $bol ? "true" : "F";
