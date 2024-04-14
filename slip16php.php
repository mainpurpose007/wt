<?php

$q = $_GET['q'];

$xml = simplexml_load_file("slip16.xml");

$bookFound = null;

foreach($xml->Book as $book){
    if($book -> Book_Title == $q){
        $bookFound = $book;
        break;
    }
}

if($bookFound){
    echo "Book found";
    echo "<table border=1>";
        echo "<tr> <th>Book Title</th> <th> Author </th> <th> year </th> <th> price </th> </tr>";
        echo "<tr>";
            echo "<td>" . $bookFound -> Book_Title . " </td>";
            echo "<td>" . $bookFound -> author . " </td>";
            echo "<td>" . $bookFound -> year . " </td>";
            echo "<td>" . $bookFound -> price . " </td>";
        echo "</tr>";
    echo "</table>";
}else{
    echo "<h3>No book are available </h3>";
}