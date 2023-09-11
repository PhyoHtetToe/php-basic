<?php
// if(isset($_POST['submit'])){

// move_uploaded_file($_FILES['file']['tmp_name'] ,
//     'upload/' . $_FILES['file']['name']);
// } #upload

#multi
if(isset($_POST['submit'])){
    foreach($_FILES['files']['tmp_name'] as $key => $value)
    echo $_FILES['files']['tmp_name'][$key];
    
    move_uploaded_file($_FILES['files']['tmp_name'][$key] ,
        'upload/' . $_FILES['files']['name'][$key]);
    }


?>

<form action="<?php $_PHP_SELF?>" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <button type="submit" name="submit">Upload</button>
</form>

