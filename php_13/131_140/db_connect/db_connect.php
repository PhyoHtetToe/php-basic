<?php

define("DB_HOST", "localhost");
define("DB_NAME", "best");
define("DB_USER", "root");
define("DB_PASS", "");

function dbConnect()
{
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else
        return $db;
}
function passGe($pass)
{
    $pass = md5(123);
    $pass = sha1(123);
    $pass = crypt($pass, $pass);
    return $pass;
}
function errDubbger($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}

//$tutorials = json_decode(file_get_contents("tutorials.json"));
$qry = "SELECT * FROM subjects";
$db = dbConnect();
$ret = mysqli_query($db, $qry);


$tutorials = json_decode(file_get_contents("tutorials.json"));


foreach ($tutorials as $tutorial) {
    $qry = "SELECT name FROM subjects WHERE id=$tutorial->subject_id";
    $result = mysqli_query($db, $qry);
    $name = "";
    foreach ($result as $row) {
        $name = $row["name"];
    }
    echo $name . "<br>";
}
