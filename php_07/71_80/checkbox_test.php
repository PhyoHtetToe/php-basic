<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['color'])){
            $colors = $_POST['color'];
            foreach($colors as $color){
                echo $color . "<br>";
            }
        }
    }


?>

<form action="<?php $_PHP_SELF?>" method="post">
    <input type="checkbox" name="color[]" value="White">White<br><br>
    <input type="checkbox" name="color[]" value="red">Red<br><br>
    <input type="checkbox" name="color[]" value="black">Black<br><br>
    <input type="checkbox" name="color[]" value="yellow">Yellow<br><br>
   <button type="submit" name="submit[]" value="Choose">Choose</button>

</form>