<?php

$employees = array(
    array("no" => 1, "name" => 'Roshan', "desi" => 'Mumbai', "salary" => 75000),
    array("no" => 2, "name" => 'Vishal', "desi" => 'Nashik', "salary" => 25000),
    array("no" => 3, "name" => 'Rv', "desi" => 'Pune', "salary" => 750000)
);

$emp = $_GET['employeeName'];
$found = false;

foreach ($employees as $e) {
    if ($e['name'] === $emp) {
        echo json_encode($e);
        $found = true;
        break;

    } else {
        echo "Opps Something went wrong";
    }
}

if(!$found){
    echo "<br>Employee Found";
}


