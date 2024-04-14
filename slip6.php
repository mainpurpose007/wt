<?php

$xml = simplexml_load_file("slip6.xml");

echo "<table border=1>";
echo "<tr> <th> Title </th> <th> author </th> <th> genre </th> <th> year </th> <th> description </th> </tr>";

foreach($xml as $v){
    echo "<tr> <td>". $v->title ."</td> <td>". $v->author ."</td> <td>". $v->genre ."</td> <td>". $v->year ."</td> <td>". $v->desc ."</td> </tr>";
}

echo "</table>";
