<?php
$name = $_POST['name'];
$age = $_POST['age'];
$nationality = $_POST['nationality'];

if (!preg_match('/^[A-Z\s]+$/', $name)) {
    echo "enter name in capital word \n";
}else if ($age < 18) {
    echo "You are not eligible for Voting </br>";
}else if(strcmp($nationality , "INDIAN") != 0){
    echo "You are not indian";
}else{
    echo "Vote successful";
}

