<?php
    $n = 0;
    // while($n <= 10){
    //     if($n == 6) {
    //         echo"Now I am the chosen one";
    //         break;
    //     }
    //     else {
    //     echo "value is now". $n . "<br>";
    //     $n++;
    //     }
        
    // }
#break

    while($n <= 10){
        if($n == 6) {
            echo"Now I am the chosen one".$n."<br>";
            $n++;
            continue;
        }
        else {
        echo "value is now". $n . "<br>";
        $n++;
        }
        
    }
#continue
?>