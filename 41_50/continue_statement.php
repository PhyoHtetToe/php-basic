<?php

    for($i = 0 ; $i < 100; $i++){
            if($i == 50 ){
                echo "<p style = 'background:red'>I am the most import now</p>";
                continue;
            }
            else{
                echo"now i value => not 50 but" . $i . "<br>";
            }
    }
?>