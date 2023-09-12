<?php
$file ="my.txt";

try{
if(file_exists($file))
    echo "file is here";
    else
    throw new Exception("not found");

}catch(Exception $e){
    exit($e->getMessage());
}
echo "hi";
?>