<?php
session_start();

if(isset($_POST['submit'])){
    $userN=$_POST['name'];
    $userP=$_POST['password'];
    
    if($userN == "kuro" && $userP == 1234){
        $_SESSION['username'] = $userN;
        $_SESSION['password'] = $userP;
        header("Location:Member.php");
    }
    else {
        echo "You are not vlid User";
    }

}
include "links.php";

?>
<h1>Index Page</h1><br>
<form action="<?php $_PHP_SELF?>" method="post">
<input type="text" name="name" placeholder="UserName"><br><br>
<input type="password" name="password"placeholder="Enter Your Password"><br><br>
<button type="submit" name="submit">Login</button>
</form>