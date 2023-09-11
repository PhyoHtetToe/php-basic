<?php

$p1 = 0;
$p2 = 0;
$p3 = 0;
$s = 0;

for($i = 0; $i< 100 ; $i++){
    $player1 = rand(0,6);
    $player2 = rand(0,6);
    $player3 = rand(0,6);

    if($player1>$player2|| $player1>$player3){
        $p1++;
    }
    
    else if($player2>$player1|| $player2>$player3){
        $p2++;
    }
    
    else if($player3>$player2|| $player3>$player1){
        $p3++;
    }
    else {
        $s++;
    }
}
echo "P1 Win " . $p1 . " times<br>";
echo "P2 Win " . $p2 . " times<br>";
echo "P3 Win " . $p3 . " times<br>";
echo "Draw " . $s . " times<br>";
?>