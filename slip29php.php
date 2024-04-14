<?php

$digit = $_POST['digit'];

$a = 0;
$b = 1;

echo "<h1> Fibonacci Series is </h1>";

echo "<h3> Fibonacci Series is";
echo "$a , $b ,";

for($i=3;$i < $digit; $i++){
    $temp = $a + $b;
    echo " $temp , ";
    $a = $b;
    $b = $temp;
}

echo "</h3> </br> ---------------------------------------------------------------";

echo "<h1> sum of the digit is </h1>";

$sum = 0;
while($digit > 0){
    $sum += $digit % 10;
    $digit = $digit / 10;
}

echo "<h3> $sum </h3>";

echo "</h1> </br>";



?>