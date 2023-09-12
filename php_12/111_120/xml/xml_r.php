<?php

// $data = simplexml_load_file("data.xml");
// print_r($data);

// foreach($data as $key=>$val){
//     echo $key . "=>" . $val . "<br>";
// }
#simplexml_load_file 

$xml =<<<START
        <coder>
                <name>Kuro</name>
                <age>18</age>
        </coder>
START;
        
$data = simplexml_load_string($xml);
// print_r($data);
foreach($data as $key=>$val){
    echo $key . "=>" . $val . "<br>";
}
#simplexml_load_string

?>