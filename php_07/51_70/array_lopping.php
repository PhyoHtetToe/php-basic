<?php
    // $color = array("Blue","Yellow","Black","White","Pink");

    // for ($i = 0; $i < count($color); $i++){
    //     echo $color[$i] . "<br>";
    // }

    #Array looping 

    // $i=10;
    // if($i < count($color)){
    //     echo $color[$i];
    //     $i++;
    // }else {
    //     echo "wht are U doing!!";
    // };
    #Recalling exe
    
    // $i=1;
    // while($i < count($color)){
    //     echo $color[$i] . "<br>";
    //     $i++;
    // }

    $color = array(
            array("Blue","Yellow","Black","White","Pink"),
            array("Red","Green","Grey","Purple"),
            array("Brown","Orange","NightBlue")
    );
    for($i = 0;$i < count($color); $i++){
        for($g = 0; $g < count($color[$i]); $g++)
        echo $color[$i] [$g] . " ";
        echo "<hr>";
    }
    
?>