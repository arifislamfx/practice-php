<?php   
    if(isset($_POST['submit_btn'])) {
     $img = $_FILES['upload_img'] ['name'];
     $tmp_name = $_FILES['upload_img'] ['tmp_name'];
     move_uploaded_file($tmp_name, "upload-img/".$img);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <img src="upload-img/<?php if(isset($img)) {echo $img;} ?>" alt="image">
</body>
</html>