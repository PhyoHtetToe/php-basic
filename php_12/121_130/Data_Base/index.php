<?php

use LDAP\Result;

define("DB_HOST", "localhost");
define("DB_NAME", "test");
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
function executeQuery($qry)
{
    $db = dbConnect();
    $result = mysqli_query($db, $qry);
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $item) {
            // errDubbger($item);
            echo "Id is =>" . $item["id"] . "<br>";
            echo "Name is =>" . $item["Name"] . "<br>";
            echo "Email is =>" . $item["Email"] . "<br>";
            echo "Password is =>" . $item["Password"] . "<br>";
            echo "<hr>";
        }
    }
}
function errDubbger($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}
// errDubbger(dbConnect());
$qry = "SELECT * FROM test";

executeQuery($qry);
