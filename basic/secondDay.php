<?php

echo '<h1 style="text-align: center; margin-top: 10px; background-color: #ddd; padding: 10px 0 " >2nd day Php class :</h1>';
echo '<br />';

$a = 20;
$b = $a + 30;
echo $b;

echo '<br />';

$a = 200;
$x = $a + 25;
echo $x;

echo '<br />';

$x = 15;
$x +=5;
echo $x;


echo '<br />';

$x = 10;
$x %=3;
echo $x;

echo '<br />';

$x = 10;
$y = '10';

if($x === $y) {
    echo 'both are same';
} else {
    echo 'not same';
}
echo '<br />';

$a = 96;
$b = 69;
if($a != $b ){
 echo 'they are not same';
} else {
    echo 'both are same value';
}
echo '<br />';

$a = 40;
$b = 50;
if($a > $b) {
    echo 'a is greater than b';
} else {
    echo 'b is greater than a';
}
echo '<br />';

$a = 50;
$b = 50;
if($a >= $b) {
    echo 'a is greater than b or same';
} else {
    echo 'b is greater than a';
}
echo '<br />';

// increment operator
$x = 10;
$x += 20;
$x++;
echo $x;

echo '<br />';
// decrement operator
$x = 10;
$x += 20;
$x--;
echo $x;

echo '<br />';
// conditional && operator
//Q. find the largest num
$a = 200;
$b = 300;
$c = 400;

if($a > $b && $a > $c) {
    echo $a;
} elseif ($b > $a && $b > $c) {
    echo $b;
} else {
    echo $c;
}
echo '<br />';
// conditional or operator
//Q. find the frist right value num
$a = 200;
$b = 300;
$c = 400;

if($a > $b || $a > $c) {
    echo $a;
} elseif ($b > $a || $b > $c) {
    echo $b;
} else {
    echo $c;
}
echo '<br />';

$marks = 60;
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
// switch case
$marks = 66;

switch($marks) {
    case ($marks >= 80 && $marks <=100):
        echo 'you have got A+';
        break;
        case ($marks >= 70 && $marks <= 79):
            echo 'you have got A';
            break;
            case ($marks >= 60 && $marks <= 69):
                echo 'you have got A-';
                break;
                case($marks >= 50 && $marks <= 59):
                    echo 'you have got B';
                    break;
                    case($marks >=40 && $marks <= 49):
                        echo 'you have got C';
                        break;
                        case($marks >=33 && $marks <= 39):
                            echo 'you have got D';
                            break;
                            case($marks >= 0 && $marks <= 32):
                                echo 'you have got F';
                                break;
                                default:
                                echo 'Invalid number';
}

// For Loop
for($i = 0; $i<= 100; $i++) {
    echo $i.'</br>';
}




?>
