<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $message = $_POST['message'];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>
<body>
    <div class="content">
        <h2>Name: <?php if(isset($_POST['name'])) {
            echo $name;
        } ?>  </h2>
          <h2>Gender: <?php if(isset($_POST['gender'])) {
            echo $gender;
        } ?>  </h2>
          <h2>Date of Birth: <?php if(isset($_POST['dob'])) {
            echo $dob;
        } ?>  </h2>
          <h2>Mobile Number: <?php if(isset($_POST['number'])) {
            echo $number;
        } ?>  </h2>
          <h2>Email: <?php if(isset($_POST['email'])) {
            echo $email;
        } ?>  </h2>
          <h2>Message: <?php if(isset($_POST['message'])) {
            echo $message;
        } ?>  </h2>
    </div>
</body>
</html>