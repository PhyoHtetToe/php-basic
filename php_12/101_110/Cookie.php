<?php

function MySetCookie(){
    setcookie('KR','Kuro',time() + 3600,'/','','0');
}
// MySetCookie();
function MyGetCookie(){
    if(isset($_COOKIE['KR'])){
        echo $_COOKIE['KR'];
    }else{
        echo " There is no Cookie";
    }
   
}
MyGetCookie();


function MyDELCookie(){
    setcookie('KR','Kuro',time()-3600,'/','','0');
}
// MyDELCookie();
?>