<?php
// $var = "PHP@gmail.com.mm";
// $result = preg_match("/^[a-zA-Z]+@[a-z]+\.[a-z]{3}+\.[a-z]{2}$/", $var);

// echo $result ? "T" : "F";

$var = "Your Breakfast wll include some rice and boil bean and palatar";
$result = preg_match("/rice/", $var);

echo $result ? "SAR ML" : "ma srr bu";
