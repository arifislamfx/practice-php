<!-- // GPA calculator if else statement
// GPA calculator switch statement
// Print 1-1000 odd number only using for loop -->



<!-- // ------------------------- GPA calculator if else statement -----------------------------------// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA calculator if else statement</title>
</head>
<body>
    

    <h1 style="text-align:center;">GPA calculator if else statement</h1>    

    <form style="background-color: #ddd; width: 300px; height: 200px; border: 1px solid red; text-align: center; color: #333; font-size:25px; margin: 0 auto;" action="hw2ndDay.php" method="get">
     
    <input style="margin: 10px; padding: 10px 20px; font: size 18px; " placeholder="input your marks number" type = 'number' name ="number">
    <input style="margin: 10px; padding: 10px 20px; cursor: pointer; " type="submit" >

    
    <br />

   <?php
   
   $marks = $_GET["number"];

if($marks >= 80 && $marks <= 100) {
    echo 'You have got A+';
} elseif ($marks >= 70 && $marks <= 79) {
    echo 'You have got  A';
} elseif ($marks >= 60 && $marks <= 69) {
    echo 'You have got A-';
} elseif ($marks >=50 && $marks <= 59) {
    echo 'You have got B';
} elseif ($marks >= 40 && $marks <= 49) {
    echo 'You have got C';
} elseif ($marks >= 33 && $marks <= 39) {
    echo 'You have got D';
} elseif ($marks >= 0 && $marks <= 32) {
    echo 'You have got F';
} else {
    echo 'invalid number';
}
    
echo '<br />';

   ?>
   </form>

   <!-- // ------------------------- GPA calculator switch statement -----------------------------------// -->

   <h1 style="text-align:center;">GPA calculator switch statement</h1>
   <form style="background-color: #ddd; width: 300px; height: 200px; border: 1px solid red; text-align: center; color: #333; font-size:25px; margin: 0 auto;" action="hw2ndDay.php" method="get">
     
    <input style="margin: 10px; padding: 10px 20px; font: size 18px; " placeholder="input your marks number" type = 'number' name ="number">
    <input style="margin: 10px; padding: 10px 20px; cursor: pointer; " type="submit" >
    <br />

    <?php

    $marks = $_GET['number'];

    switch($marks) {
        case($marks >= 80 && $marks <= 100):
         echo 'You have got A+';
         break;
         
         case($marks >=70 && $marks <=79):
            echo "You have got A";
            break;

        case($marks >= 60 && $marks <= 69):
            echo 'You have got A-';
            break;

        case($marks >= 50 && $marks <= 59):
            echo 'You have got B';
            break;

        case($marks >= 40 && $marks <= 49):
            echo 'You have got C';
            break;

        case($marks >= 33 && $marks <= 39):
            echo 'You have got D';
            break;

        case($marks >= 0 && $marks <= 32):
            echo 'You have got F <br /> You are fail bro!';
            break;

        default:
        echo 'Invalid Number';


    }

    ?>

    </form>

     <!----------------------- Print 1-1000 odd number only using for loop ----------------------->
     <h1 style="text-align:center;">Print 1-1000 odd number only using for loop</h1>
     <hr>
    <?php

     for($i=1; $i<= 1000; $i++) {

        if($i%2 != 0) {
            echo $i.'</br>';
        }
     }
     ?>

</body>
</html>