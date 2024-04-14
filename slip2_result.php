<?php

$fontStyle = $_COOKIE['fontStyle'];
$fontSize = $_COOKIE['fontSize'];
$fontColor = $_COOKIE['fontColor'];
$backgroundColor = $_COOKIE['bg'];

$message = "Hello world! I am Roshan.";

echo "<body bgcolor=$backgroundColor>";
    echo "<font face=$fontStyle size=$fontSize color=$fontColor> $message </font>";
echo "</body>";