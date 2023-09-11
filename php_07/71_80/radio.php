<?php
    if(isset($_POST['submit'])){
        
            $colors = $_POST['Myradio'];
            
                echo "You choose =>" . $colors ;
            
        
    }


?>

<form action="<?php $_PHP_SELF?>" method="post">
    <input type="radio" name="Myradio" value="White">White<br><br>
    <input type="radio" name="Myradio" value="red">Red<br><br>
    <input type="radio" name="Myradio" value="black">Black<br><br>
    <input type="radio" name="Myradio" value="yellow">Yellow<br><br>
   <button type="submit" name="submit" value="Choose">Choose</button>

</form>