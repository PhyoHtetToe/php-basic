<?php

$ary = [
    ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4],
    ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4],
    ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4],
    [
        "One" => 1, "Two" => 2, "Three" => 3, "Four" =>
        ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4],
        ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4],
        ["One" => 1, "Two" => 2, "Three" => 3, "Four" => 4]
    ]

];
// echo "<pre>" . print_r($ary, true) . "</pre>";
$encode = json_encode($ary);
$decode = json_decode($encode, true);
foreach ($decode as $val) {
    foreach ($val as $key => $data) {
        if (!is_array($data)) {
            echo "Key is " . $key . "and the value is" . $data . "<bsr>";
        } else {
            foreach ($data as $ky => $item) {
                echo "Key is " . $ky . "and the value is" . $item . "<br>";
            }
        }
        echo  "<hr>";
    }
}
