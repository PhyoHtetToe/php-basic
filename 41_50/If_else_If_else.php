<?php
// $num_1 = 22;
// $num_2 = 29;


// if ($num_1 + $num_2 == 40){

//     echo "<b style='color: red;'>Try Again</b>";

// }
// else if($num_1 + $num_2 == 51) {

//     echo "<b style='color: Green;'>Nice</b>";

// }
// else {

//     echo "<b style='color: red;'>Completely wrong</b>";

// }

#Else if with operator

$name = "Kuro";
$pass = 13366;


if ($name =="Kai" && $pass == 13366){

    echo "<b style='color: Green;'>Welcome Kai</b>";

}
else if ($name == "Kuro" && $pass !== 13388){

    echo "<b style='color: Green;'>Welcome Kuro</b>";

}
else if ($name == "ASH" || $pass == 23366){

    echo "<b style='color: Green;'>Welcome ASH</b>";

}
else {

    echo "<b style='color: Red;'> Who the hell are you??</b>";

}

?>