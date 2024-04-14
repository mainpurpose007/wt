<?php

session_start();

$counts = 0;

if(!isset($_SESSION['pv'])){
    $counts =  $_SESSION['pv'] = 1;
}else{
    $counts = $_SESSION['pv']++;
}

echo "page view " . $counts . "";