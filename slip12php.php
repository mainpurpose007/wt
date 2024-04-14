<?php 

$fp = fopen("slip12.dat" , 'r');

echo "<table border=1>";

echo "<tr> <th> SR </th> <th> Name </th> <th> Residental number </th> <th> Mobile Number </th> <th> City </th> </tr>";

while($row = fscanf($fp , "%s%s%s%s%s")){
    echo "<tr>";
    foreach($row as $r){
        echo "<td>  $r </td>";
    }
    echo "</tr>";
}

echo "</table>";

fclose($fp);
