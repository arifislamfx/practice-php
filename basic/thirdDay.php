
<?php

// while loop 

// $i = 1;

// while($i <= 10) {
//     echo $i.'<br>';
//     $i++;
// }

    // do while loop
    // $i = 1;
    // do{
    //     echo $i.'<br>';
    //     $i++;
    // } while($i <= 10);

    // Array
    
    // 1-100 even number by while loop
    echo '<h1 style="text-align: center; margin-top: 10px; background-color: #ddd; padding: 10px 0 " >1-100 even number by while loop :</h1>';
     echo '<br />';

     $i = 1;
     while($i<=50) {
         if($i%2 == 0) {
             echo $i.',';
         }
         $i++;
     }

     
   
     echo '<br />';

     echo '<h1 style="text-align: center; margin-top: 10px; background-color: #ddd; padding: 10px 0 " >1-100 even number by do while loop :</h1>';
     echo '<br />';

     $i = 1;

     do{
         if($i%2 == 0) {
             echo $i.',';
         }
         $i++;
     } while ($i <= 60);


?>





