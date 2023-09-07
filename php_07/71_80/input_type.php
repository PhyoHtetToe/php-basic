<?php
    if(isset($_POST['submit'])){
        echo "Welcome to Our Server!";
        $uname = $_POST['username'];
        $pass = $_POST['password'];
  
    }
  

?>

<form action="<?php $_PHP_SELF?>" method="post">
    <input type="text" name="username" placeholder="username"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submit" name="submit">Login</button>

</form>