
<?php

include("function.php");

$objCrudAdmin = new crudApp();

if(isset($_POST['info_btn'])) {
   $return_msg = $objCrudAdmin->add_data($_POST);
}

$students = $objCrudAdmin->display_data();

if(isset($_GET['status'])) {
  if($_GET['status'] = 'delete') {
    $delete_id = $_GET['id'];
   $delete_msg = $objCrudAdmin->delete_data($delete_id);
  }
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
    <!-- when add info -->
    <?php if(isset($return_msg)) {echo $return_msg;} ?>
    <?php if(isset($delete_msg)) {echo $delete_msg;} ?>
    <input class="form-control mb-2" type="text" name="std_name" placeholder="enter your name">
    <input class="form-control mb-2" type="number" name="std_roll" placeholder="enter your roll">
    <label for="image">Upload Your Image</label>
    <input class="form-control mb-2" type="file" name="std_img" >
    <input class="form-control bg-warning" type="submit" value="ADD INFO" name="info_btn">
    </form>

    </div>
    
    <div class="container my-4 p-4 shadow">
    
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
          <?php while($student=mysqli_fetch_assoc($students)) {?>
            <tr>
                <td> <?php echo $student['id']; ?> </td>
                <td> <?php echo $student['std_name']; ?> </td>
                <td><?php echo $student['std_roll']; ?> </td> 
                <td> <img style="width: 80px;" src="upload/<?php echo $student['std_img']; ?>" alt=""> </td>
                <td>
                    <a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $student['id']; ?>">Edit</a>

                    <a class="btn btn-warning"href="?status=delete&&id=<?php echo $student['id']; ?>"  >Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
