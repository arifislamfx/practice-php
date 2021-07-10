<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image Form</title>
</head>
<body>
    <div style="margin-top: 100px; display:flex; align-items: center; justify-content: center;" class="form_container">
        <form action="img.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="upload_img" id="">
            <br />
            <br />
            <input style="cursor: pointer;" type="submit" name="submit" value="Upload">
        </form>
    </div>
</body>
</html>