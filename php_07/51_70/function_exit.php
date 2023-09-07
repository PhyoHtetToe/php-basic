<?php 
    // function doIt(){
    //     echo "Hi I am here";
    // }
    // $var = "doIt";
    // $var();
    // $bool = function_exists($var);
    // if($bool){
    //     echo "yap";
    // }
    // else {
    //     echo "nope";
    // }

    # function exists test
    #global and local Var

        // $var = 99;
        // function moshi() {
        //     $var = 90;
        // }
        // echo $var; 

        $var = 99;
        function moshi() {
            global $var;
            echo $var;
        }

?>  