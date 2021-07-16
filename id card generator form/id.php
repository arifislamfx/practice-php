
<?php

  if(isset($_POST['submit'])) {
    $name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    $email = $_POST['user_email'];
    $course = $_POST['user_course'];
    $batch = $_POST['user_batch'];

    $img = $_FILES['upload_img'] ['name'];
    $tmp_name = $_FILES['upload_img'] ['tmp_name'];
    move_uploaded_file($tmp_name, "upload/".$img);

  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="id.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
</head>

<body>
<body class='bg-grid-line'></body>
<div class='card'>
  <header>
    <h1>WebDevs SID</h1>
  </header>
  <article>
    <img alt='My Pic' id='thumb' src='upload/<?php if(isset($img)) { echo $img;} ?>'>
    <h2> 
      <?php
       if(isset($_POST['user_name'])) {
      echo $name;
    } ?> 
    </h2>
    <div class='area'>
      <h3>
        <?php
        if(isset($_POST['user_course'])) {
          echo $course;
        }
        ?>
      </h3>
      <ul>
        <li>
          <?php 
          if(isset($_POST['user_phone'])) {
            echo $phone;
          }
          ?>
        </li>
        <li>
          <?php
          if(isset($_POST['user_email'])) {
            echo $email;
          }
          ?>
        </li>
        <li>
          <?php
           if(isset($_POST['user_batch'])) {
             echo $batch;
           } 
          ?>
        </li>
      </ul>
      
    </div>
  </article>
</div>


    
</body>

</html>