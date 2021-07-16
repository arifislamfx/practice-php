
<?php

include("function.php");

$objCrudAdmin = new crudApp();

$students = $objCrudAdmin->display_data();

if(isset($_GET['status'])) {
    if($_GET['status'] = 'edit') {
        $id = $_GET['id'];
     $returndata = $objCrudAdmin->display_data_by_id($id);
    }
}

if(isset($_POST['edit_btn'])) {
  $update_msg = $objCrudAdmin->update_data($_POST);
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>

    <div class="container my-4 p-4 shadow">

    <h2 style="text-align: center; margin-bottom: 20px;" > <a style="text-decoration: none;" href="index.php"> WebDevs Student Database </a> </h2>
    
    <form class="from" action="" method="post" enctype="multipart/form-data">

    <?php if(isset($update_msg)) {echo $update_msg;} ?>

    <input class="form-control mb-2" type="text" name="u_std_name" value="<?php echo $returndata['std_name']; ?>">

    <input class="form-control mb-2" type="number" name="u_std_roll" value="<?php echo $returndata['std_roll']; ?>">

    <label for="image">Upload Your Image</label>
    <input class="form-control mb-2" type="file" name="u_std_img" >

    <input type="hidden" name="std_id" value="<?php echo $returndata['id']; ?>">

    <input class="form-control bg-warning" type="submit" value="Update Information" name="edit_btn">
    </form>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
