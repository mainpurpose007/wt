<?php
session_start();


$basic = $_POST['basic'];
$da = $_POST['da'];
$hra = $_POST['hra'];

$no = $_SESSION['no'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
$total = ($basic + $da + $hra);

echo "no -> $no";
echo "<br>";
echo "name -> $name";
echo "<br>";
echo "address -> $address";
echo "<br>";
echo "Basic -> $basic";
echo "<br>";
echo "DA -> $da";
echo "<br>";
echo "HRA -> $hra";
echo "<br>";
echo "<br>";
echo "Total -> $total";

session_destroy();
