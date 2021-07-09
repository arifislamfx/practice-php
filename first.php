 <?php 

echo '<h1 style="text-align: center; background-color: #ddd; padding: 10px 0 " >1st day Php class :</h1>';
echo '<br />';

 $welcomeMessage = "hello guyss!  whats up";
echo '<br />';
echo '<br />';
echo $welcomeMessage ;
echo '<br />';
echo $welcomeMessage ;
echo '<br />';
echo $welcomeMessage ;
echo '<br />';
echo $welcomeMessage ;
echo '<br />';
echo $welcomeMessage ;
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

echo '<hr>';

echo '<h1 style="text-align: center;" >Php variable data type:</h1>';

echo '<br />';

// php data type
$one = "hello"; //string
$two = 153; //integer
$three = 122.5; //float
$four = true; //boolean
$five = array('sumi', 'arif', 'alija'); //array
$six = null; 

echo var_dump($one);
echo '<br />';
echo var_dump($two);
echo '<br />';
echo var_dump($three);
echo '<br />';
echo var_dump($four);
echo '<br />';
echo var_dump($five);
echo '<br />';
echo var_dump($six);

echo '<hr>';
echo '<h1 style="text-align: center;" >Php condition :</h1>';
echo '<br />';

$arif_age = 28;
$sumi__age = 28;

if($arif_age > $sumi__age) {
    echo 'arif is older';
} elseif ($arif_age < $sumi__age) {
    echo "sumi is older";
} else {
    echo 'both are same age';
}

echo '<hr>';
echo '<h1 style="text-align: center; background-color: #ddd; padding: 10px 0 " >Php class task 3 way we slove it. :</h1>';
echo '<br />';

// Find the largest number between three. 
$firstNumber = 4023;
$secondNumber = 4032;
$thirdNumber = 5240;

if($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    echo $firstNumber;
} elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    echo $secondNumber;
} else {
    echo $thirdNumber;
}
echo '<br />';

// second way
$largest = max(2550, 6580, 2403, 56464); 
echo $largest;

echo '<br />';

// third way
$largestNum = array(1256, 4587, 78778, 85652, 35446, 68989);
echo max($largestNum);


?> 